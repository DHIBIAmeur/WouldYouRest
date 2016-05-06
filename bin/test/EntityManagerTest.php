<?php
  require __DIR__ . '/../../vendor/autoload.php';
  use Rest\Persistance\EntitiesManager;

/**
 * Class EntityManagerTest
 */
Class EntityManagerTest extends PHPUnit_Framework_TestCase
  {
  /**
   * @var EntitiesManager
   */
    private $entitiesManager;

    public function __construct(){
      $this->entitiesManager = new EntitiesManager();
    }

    public function testMethodExecuteSelect()
    {
        $sql = "SELECT * FROM teams where id = ? and name = ?";
        $params = array('1','Paris');
        $this->assertNotNull($this->entitiesManager->executeSelect($sql,$params));

    }

    public function testMethodDoSelectMapping()
    {

      $sql = "SELECT * FROM teams";
      //$params = array('1','Paris');
      $this->assertNotNull(
                $this->entitiesManager->LoadSelect('\\Rest\\Entities\\Team',
                $this->entitiesManager->executeSelect($sql)));
    }


    public function testMethodGetObjects()
     {
       $this->assertNotNull($this->entitiesManager->getObjects('\\Rest\\Entities\\Team',
          "SELECT * FROM teams where id = ? and name = ?",
          array('1','Paris')));
     }
  }

 ?>
