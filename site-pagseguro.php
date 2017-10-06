<?php 

use \Hcode\Page;
use \Hcode\Model\User;
use \GuzzleHttp\Client;
use \Hcode\PagSeguro\Config;
use \Hcode\Model\Order;

$app->get('/payment', function(){

    User::verifyLogin(false);

    $order = new Order();

    $order->getFromSession();

    $years = [];

    for ($y = date('Y'); $y < date('Y')+14; $y++)
    {
        array_push($years, $y);
    }

    $page = new Page([
        "footer"=>false
    ]);

    $page->setTpl("payment", [
        "order"=>$order->getValues(),
        "msgError"=>Order::getError(),
        "years"=>$years,
        "pagseguro"=>[
            "urlJS"=>Config::getUrlJS()
        ]
    ]);

});

$app->get('/payment/pagseguro', function() {

    $client = new Client();
    $res = $client->request('POST', Config::getUrlSessions() . "?" . http_build_query(Config::getAuthentication()), [
        'verify'=>false
    ]);
    
    echo $res->getBody()->getContents();

});