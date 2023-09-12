<?php
class Product
{
    public $id;
    public $title;
    public $price;
    public $availableQuantity;

    public function __construct($id,$title,$price,$availableQuantity)
    {
        $this->id = $id;
        $this->title= $title;
        $this->price= $price;
        $this->availableQuantity=$availableQuantity;
    }



    public function getId()
    {
        return $this->id;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    public function addToCart(Cart $cart,int $quantity):CartItem
    {
        if($quantity <= $this->getAvailableQuantity()){
            return $cart->addProduct($this,$quantity);

        }else{
            echo 'dont have enough';
        }

    }

    public function removeFromCart(Cart $cart)
    {
        $cart->removeProduct();
    }
}