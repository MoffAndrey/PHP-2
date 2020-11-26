<?php

namespace app\models;

class OrderItem extends Model
{
    public $id;
    public $idOrder;
    public $idProduct;
    public $quantity;

    public function getProductById(int $id)
    {

    }

    public function getTableName(): string
    {
       return "order_items";
    }


}