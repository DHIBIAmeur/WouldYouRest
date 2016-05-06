<?php

    namespace Rest\Core;
    use Rest\Core\Config\IConfig;

    /**
    *
    * Class Connection
    * Singleton d'accès à la base de données intégrant PDO
    *
    * @package Rest\Core
    */
    Class Connection
    {
      private static $connection;

      private function __construct(){

          $conf = IConfig::$database['default'];

          try{
                self::$connection = new \PDO('pgsql:host='.$conf['host'].';
                                      dbname='.$conf['db'],
                                              $conf['user'],
                                              $conf['pass']);
                $this->connect    = self::$connection;
              }catch(\PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
          }
      }

        /**
         * @return \PDO
         *        Cette fonction retourne le singleton de la connexion
         */
      public static function getconnection(){
           if(is_null(self::$connection)){

              new connection();
           }
          return  self::$connection;

      }


    }

 ?>
