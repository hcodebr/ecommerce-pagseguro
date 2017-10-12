<?php

namespace Hcode\PagSeguro;

use Exception;
use DOMDocument;
use DOMElement;

class Phone {

    private $areaCode;
    private $number;

    public function __construct(int $areaCode, int $number)
    {

        if (!$areaCode || $areaCode < 11 || $areaCode > 99)
        {

            throw new Exception("Informe o DDD do telefone.");

        }

        if (!$number || strlen($number) < 8 || strlen($number) > 9)
        {

            throw new Exception("Informe o número do telefone");

        }

        $this->areaCode = $areaCode;
        $this->number = $number;

    }

    public function getDOMElement():DOMElement
    {

        $dom = new DOMDocument();

        $phone = $dom->createElement("phone");
        $phone = $dom->appendChild($phone);

        $areaCode = $dom->createElement("areaCode", $this->areaCode);
        $areaCode = $phone->appendChild($areaCode);

        $number = $dom->createElement("number", $this->number);
        $number = $phone->appendChild($number);

        return $phone;

    }

}