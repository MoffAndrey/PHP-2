<?php

namespace app\models;

class Order extends Model
{
    public $id;
    public $idUser;
    public $date;
    public $products;

    public function getOrderItems(int $idOrder)
    {

    }

    public function getTableName(): string
    {
       return "orders";
    }


}