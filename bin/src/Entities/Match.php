<?php

  namespace Rest\Entities;

/**
 *
 *Entity Match
 *
 */
  class Match
  {
    private $id;
    private $homeTeam;
    private $awayTeam;
    private $homeScore;
    private $awayScore;

    private $p;
    private $snitch;
    private $padj;
    private $swim;
    private $event;
    private $eventOrder;


    public function __construct($id, $homeTeam, $awayTeam, $awayScore, $p, $snitch,
                                $padj, $swim, $event, $eventOrder)
    {
        $this->id         = $id;
        $this->homeTeam   = $homeTeam;
        $this->awayTeam   = $awayTeam;
        $this->awayScore  = $awayScore;
        $this->p          = $p;
        $this->snitch     = $snitch;
        $this->padj       = $padj;
        $this->swim       = $swim;
        $this->event      = $event;
        $this->eventOrder =$eventOrder;
    }


    public function getId(){
      return $this->id;
    }

    public function getHomeTeam(){
      return $this->homeTeam;
    }

    public function getAwayTeam(){
      return $this->awayTeam;
    }

    public function getHomeScore(){
      return $this->homeScore;
    }

    public function getAwayScore(){
      return $this->awayScore;
    }

    public function getP(){
      return $this->p;
    }

    public function getSnitch(){
      return $this->snitch;
    }

    public function getPadj(){
      return $this->padj;
    }

    public function getSwim(){
      return $this->swim;
    }

    public function getEvent(){
      return $this->event;
    }

    public function getEventOrder(){
      return $this->eventOrder;;
    }




    function setId($id){
        $this->id=$id;
    }

    function setHomeTeam($homeTeam){
        $this->homeTeam=$homeTeam;
    }

    function setAwayTeam($awayTeam){
        $this->awayTeam=$awayTeam;
    }

    function setHomeScore($homeScore){
        $this->homeScore=$homeScore;
    }

    function setAwayScore($awayScore){
        $this->awayScore=$awayScore;
    }

    function setP($p){
        $this->p=$p;
    }

    function setSnitch($snitch){
        $this->snitch=$snitch;
    }

    function setPadj($padj){
        $this->padj=$padj;
    }

    function setSwim($swim){
        $this->swim = $swim;
    }

    function setEvent($event){
        $this->event=$event;
    }

    function setEventOrder($eventOrder){
        $this->eventOrder;
    }







  }
 ?>
