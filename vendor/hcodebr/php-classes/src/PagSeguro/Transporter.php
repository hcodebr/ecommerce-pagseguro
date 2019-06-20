<?php

namespace Hcode\PagSeguro;

use \GuzzleHttp\Client;
use \Hcode\Model\Order;
use Exception;

class Transporter {

	public static function createSession()
	{

		$client = new Client();

		$res = $client->request('POST', Config::getUrlSessions() . "?" . http_build_query(Config::getAuthentication()), [
			"verify"=>false
		]);
		
		$xml = simplexml_load_string($res->getBody()->getContents());

		return ((string)$xml->id);

	}

	public static function sendTransaction(Payment $payment)
	{

		$client = new Client();
		
		$res = $client->request('POST', Config::getUrlTransaction() . "?" . http_build_query
		(Config::getAuthentication()), [
			"verify"=>false,
			"headers"=>[
				"Content-Type"=>"application/xml"
			],
			"body"=>$payment->getDOMDocument()->saveXml()
		]);
		
		$xml = simplexml_load_string($res->getBody()->getContents());

		$order = new Order();

		$order->get((int)$xml->reference);

		$order->setPagSeguroTransactionResponse(
			(string)$xml->code,
			(float)$xml->grossAmount,
			(float)$xml->discountAmount,
			(float)$xml->feeAmount,
			(float)$xml->netAmount,
			(float)$xml->extraAmount,
			(string)$xml->paymentLink
		);

		return $xml;

	}

	public function getNotification(string $code, string $type)
	{

		switch ($type)
		{
			case "transaction":
			$url = Config::getNotificationTransactionURL();
			break;
	
			default:
			throw new Exception("Notificação inválida");
			break;
		}

		$client = new Client();
		
		$res = $client->request('GET', $url . $code . "?" . http_build_query(Config::getAuthentication()), [
			"verify"=>false
		]);
		
		$xml = simplexml_load_string($res->getBody()->getContents());		

		$order = new Order();

		$order->get((int)$xml->reference);

		if ($order->getidstatus() !== (int)$xml->status)
		{

			$order->setidstatus((int)$xml->status);

			$order->save();

		}

		$filename = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "res" . DIRECTORY_SEPARATOR . "logs" . DIRECTORY_SEPARATOR . date("YmdHis") . ".json";

		$file = fopen($filename, "a+");
		fwrite($file, json_encode(array(
			"post"=>$_POST,
			"xml"=>$xml
		)));
		fclose($file);

		return $xml;

	}

}