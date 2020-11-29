<?php

class Car
{
   public $name;
   public $id;
   public $picture;

   public function __construct($row){
       $this->name = $row['nume'];
       $this->id = $row['id'];
       $this->picture= $row['picture'];
   }

}