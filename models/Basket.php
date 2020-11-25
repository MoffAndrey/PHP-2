<?php
use models\Product;

namespace models;

class Basket extends Model
{
    public $userId;
    public $products = [];


    public function addToBasket(int $productId, int $quantity)
    {
        $this->products[] = [$productId, $quantity];
    }

    public function removeFromBasket(int $productId, int $quantity)
    {
       
    }

    public function clearBasket()
    {
       unset($this->products);
    }

    public function createOrder()
    {
       
    }
}