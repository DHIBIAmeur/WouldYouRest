<?php

  namespace Rest\Entities;

  /**
   *
   *Entity Event
   *
   */
  class  Event
  {
    private $id;
    private $name;
    private $eventStartDate;
    private $eventEndDate;
    private $matchs;


    function __construct( $id, $name, $eventStartDate, $eventEndDate, $matchs)
    {
          $this->id             = $id;
          $this->name           = $name;
          $this->eventStartDate = $eventStartDate;
          $this->eventEndDate   = $eventEndDate;
          $this->matchs         = $matchs;
    }

    public function getId(){
      return $this->id;
    }

    public function getName(){
      return $this->name;
    }

    public function getEventStartDate(){
      return $this->eventStartDate;
    }

    public function getEventEndDate(){
      return $this->eventStartDate;
    }

    public function getMatchs(){
      return $this->matchs;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function setEventStartDate($eventStartDate){
        $this->eventStartDate=$eventStartDate;
    }

    public function setEventEndDate($eventEndDate){
        $this->eventEndDate=$eventEndDate;
    }

    public function setMatchs( $matchs){
       $this->matchs=$matchs;
    }
  }


 ?>
