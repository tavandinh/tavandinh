<?php 

    class Category{
        private $id;
        private $name;

        // public function __construct(){
        //     $this->id = NULL;
        //     $this->name = NULL;
        // }

        // public function __construct($id=NULL, $name=NULL){
        //       $this->id = $id;
        //       $this->name = $name;
        // }

        public function getID(){
            return $this->id;
        }

        public function setID($value){
            $this->id = $value;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($value){
            $this->name = $value;
        }
    }

    $category1 = new Category(3,'HTML');
    $category2 = new Category(4,"PHP");

    // $category1->setID(1);
    // $category1->setName('HTML');

    // $category2->setID(2);
    // $category2->setName('PHP');

    echo 'ID12: '.$category1->getID().' Name: '.$category1->getName().' ';
    echo 'ID22: '.$category2->getID().' Name: '.$category2->getName().' ';

?>