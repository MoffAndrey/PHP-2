<?php

namespace app\models;

class Category extends Model
{
    public $id;
    public $categoryParentId;
    public $name;
    public $description;

    public function changeParentCategory(int $categoryParentId)
    {

    }

    public function getTableName(): string
    {
       return "categories";
    }


}