<?php

namespace Hcode\PagSeguro;

class Shipping {

    const PAC = 1;
    const SEDEX = 2;
    const OTHER = 3;

    private $address;
    private $type;
    private $cost;
    private $addressRequired;

}