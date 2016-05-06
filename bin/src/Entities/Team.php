<?php

  namespace Rest\Entities;

  /**
   *
   *Entity Team
   *
   */
  class Team
  {
    private $id;
    private $name;


    public function __construct($id=NULL,$name=NULL)
    {
      $this->id=$id;
      $this->name=$name;
    }


    public function getId(){
      return $this->id;
    }

    public function getName(){
      return $this->name;
    }

    public function setId($id){
       $this->id=$id;
    }

    public function setName($name){
      $this->name=$name;
    }
  }


 ?>
