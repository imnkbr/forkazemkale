<?php
class Cart
{
    public array $items =[];

    

    public function getItems()
    {
        return $this->items;
    }

 
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    public function addProduct(Product $product,int $quantity):CartItem
    {
        $cartitem=new CartItem($product,$quantity);
        if($quantity <= $product->getAvailableQuantity())
        {
            if(!in_array($product,$this->items)){
                array_push($this->items,$cartitem);
                return $cartitem;
            }elseif(in_array($product,$this->items)){
                array_replace([$product,$quatity],$this->items);
                return $cartitem;
            }
            

        }


    }
    

    public function removeProduct(Product $product)
    {
        foreach($this->items as $key=>$val){
            if($product == $val->getProduct()){
                unset ($this->items[$key]);
            }
        }

    }

    public function getTotalQuantity():int
    {
        $totalquantity = 0;
        foreach($this->items as $item){
            $qua = $item->getQuantity();
            $totalquantity += $qua;
            
        }
        return $totalquantity;
    }

    public function getTotalPrice()
    {
        $totalprice = 0;
        foreach($this->items as $item){
            $price = $item->getProduct()->getPrice();
            $totalprice += $price * $item->getQuantity(); 
        }
        return $totalprice;
    }


}