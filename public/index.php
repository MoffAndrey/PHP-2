<?php
include $_SERVER['DOCUMENT_ROOT'] . "/../services/Autoloader.php";
use models\Product;
use models\User;
use services\Autoloader;

spl_autoload_register([new Autoloader(), 'loadClass']);

$product = new Product();

function cache(ModelInterface $model) {
    serialize($model->getAll());
}

//cache(new User());

var_dump($product);

