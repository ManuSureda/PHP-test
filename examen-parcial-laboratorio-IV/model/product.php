<?php namespace model;


/**
 *
 */
class Product
{
  private $productCode;
  private $name;
  private $cost;
  private $price;
  private $stock;

  function __construct($code,$n,$c,$p,$s)
  {
    $this->productCode=$code;
    $this->name=$n;
    $this->cost=$c;
    $this->price=$p;
    $this->stock=$s;
  }

  public function getProductCode(){return $this->productCode; }
  public function getName(){return $this->name; }
  public function getCost(){return $this->cost; }
  public function getPrice(){return $this->price; }
  public function getStock(){return $this->stock; }

  

}
