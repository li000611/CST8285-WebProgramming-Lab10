<?php
class menuItem
{
	private $itemName;
	private $description;
	private $price;

	public function __construct($tItemName, $tDescription, $tPrice)
	{
	$this->itemName = $tItemName;
	$this->description = $tDescription;
	$this->price = $tPrice;
	}

	public function showItemName(){
		return $this->itemName;
	}

	public function showDescription(){
		return $this->description;
	}

	public function showPrice(){
		return $this->price;
	}
}

?>
