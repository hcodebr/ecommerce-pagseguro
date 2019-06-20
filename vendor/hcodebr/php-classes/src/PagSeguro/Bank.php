<?php

namespace Hcode\PagSeguro;

use Exception;
use DOMDocument;
use DOMElement;

class Bank {

	private $name;

	public function __construct(string $name)
	{

		if (!$name)
		{

			throw new Exception("Informe o nome do banco.");

		}

		$this->name = $name;

	}

	public function getDOMElement():DOMElement
	{
	
		$dom = new DOMDocument();

		$bank = $dom->createElement("bank");
		$bank = $dom->appendChild($bank);

		$name = $dom->createElement("name", $this->name);
		$name = $bank->appendChild($name);

		return $bank;

	}
	
}