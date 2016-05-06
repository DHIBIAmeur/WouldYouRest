<?php

require __DIR__ . '/../../vendor/autoload.php';
use Rest\Core\Connection;


Class ConnectionTest extends \PHPUnit_Framework_TestCase
{

    public function testConnection()
    {
        $cnx = Connection::getconnection();
        $this->assertNotNull($cnx);
    }


}