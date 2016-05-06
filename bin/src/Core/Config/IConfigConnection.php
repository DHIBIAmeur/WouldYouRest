<?php

    namespace Rest\Core\Config;

    Class IConfigConnection
    {
        public static $database =
          array('default' => array ('dbms' =>'pgsql',
                                    'host' => 'localhost',
                                    'db'   => 'Sport',
                                    'user' => 'postgres',
                                    'pass' => 'frehi2007'
            )
        );

    }
 ?>
