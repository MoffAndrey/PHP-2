<?php
class Product {
    public $id;
    public $category;
    public $name;
    public $description;
    public $price;

    public function __construct($id, $category, $name, $description, $price)
    {
        $this->id = $id;
        //Думал под категории ещё, но потом решил, что свойство категория может быть массивом
        $this->category = $category;
        $this->name = $name;
        //Описание тоже может быть массиво
        $this->description = $description;
        $this->price = $price;
    }

    public function getAll() {

    }

    public function getOne( int $id ) {

    }
    //Изменение базовой цены товара
    public function changePrice( int $id ) {

    }
    //Изменение категории
    public function changeCategory( int $id ) {

    }

}

//Наследник это будет комплектующие к товару или сопутсвующие товары, расходники например
class Accessories extends Product {
    public $id_parent; //Может быть массивом

    public function __construct($id, $category, $name, $description, $price, $id_parent)
    {
        parent::__construct($id, $title, $content, $author);
        $this->id_parent = $id_parent;
    }

    public function changeIdParent( $id_parent ) {

    }


}

//Задание 5
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo(); // 1
$a2->foo(); // 2
$a1->foo(); // 3
$a2->foo(); // 4
//Потому что переменная $x статическая, единая для всех объектов класса А

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); // 1
$b1->foo(); // 1
$a1->foo(); // 2
$b1->foo(); // 2
//Потому что класс B это уже другой класс, другая сущность, хоть и унаследовавшая все методы, но у объектов класса B свои собственные статические переменные в области памяти.


//Задание 7
    //Не увидел разницы с последним кодом совсем.
