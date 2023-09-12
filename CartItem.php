<?php
class CartItem
{
    public Product $product;
    public int $quantity;

    public function __construct($product,$quantity){
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function increaseQuantity(){
      if($this->quantity < $this->product->getAvailableQuantity()){
        $this->quantity++;
      }  
    }


    
}