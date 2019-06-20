<?php

namespace Hcode\PagSeguro;

use Exception;
use DOMDocument;
use DOMElement;

class Item {

	private $id;
	private $description;
	private $amount;
	private $quantity;

	public function __construct(
		int $id,
		string $description,
		float $amount,
		int $quantity
	)
	{

		if (!$id || !$id > 0)
		{
			throw new Exception("Informe o ID do item.");
		}

		if (!$description)
		{
			throw new Exception("Informe a descrição do item.");
		}

		if (!$amount || !$amount > 0)
		{
			throw new Exception("Informe o valor total do item.");
		}

		if (!$quantity || !$quantity > 0)
		{
			throw new Exception("Informe a quantidade do item.");
		}

		$this->id = $id;
		$this->description = $description;
		$this->amount = $amount;
		$this->quantity = $quantity;

	}

	public function getDOMElement():DOMElement
	{
	
		$dom = new DOMDocument();

		$item = $dom->createElement("item");
		$item = $dom->appendChild($item);

		$amount = $dom->createElement("amount", number_format($this->amount, 2, ".", ""));
		$amount = $item->appendChild($amount);

		$id = $dom->createElement("id", $this->id);
		$id = $item->appendChild($id);

		$quantity = $dom->createElement("quantity", $this->quantity);
		$quantity = $item->appendChild($quantity);

		$description = $dom->createElement("description", $this->description);
		$description = $item->appendChild($description);

		return $item;

	}
	
}