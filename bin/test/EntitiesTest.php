<?php

require __DIR__ . '/../../vendor/autoload.php';
use Rest\Entities\Team;
use Rest\Entities\Match;
use Rest\Entities\Event;


class EntitiesTest extends PHPUnit_Framework_TestCase
{

    public function testTeam()
    {
        $idTeam   = 1;
        $nameTeam = 'name';
        $team     = new Team(2,'5');
        $team->setName($nameTeam);
        $team->setId($idTeam);
        $this->assertEquals($nameTeam, $team->getName());
        $this->assertEquals($idTeam, $team->getId());
    }

    public function testEvent()
    {
        $idEvent        =  1;
        $nameEvent      = 'name';
        $eventStartDate = '01/01/2016';
        $eventEndDate   = '01/10/2016';
        $match1          =  new Match('id', 'homeTeam', 'awayTeam', 'awayScore',
                            'p', 'snitch', 'padj', 'swim', 'event', 'eventOrder');
        $match2         =  new Match('id', 'homeTeam', 'awayTeam', 'awayScore',
                                                'p', 'snitch', 'padj', 'swim', 'event', 'eventOrder');

        $event1          =  new Event($idEvent, $nameEvent, $eventStartDate,
                            $eventEndDate, $match1);
        $event2          =  new Event($idEvent, $nameEvent, $eventStartDate,
                              $eventEndDate, $match2);
        $events1 =  $event1->getMatchs()->setId('2d');
        $events2 =  $event2->getMatchs()->setId('3d');

        $this->assertNotEquals($event1->getMatchs()->getId(), $event2->getMatchs()->getId());
        $events2 =  $event2->getMatchs()->setId('2d');
        $this->assertEquals($event1, $event2);
    }

}



 ?>
