<?php

namespace Rest\Persistance;
use Rest\Core\Config\IConfigMapping;
use Rest\Core\Connection;

/**
 * Class EntitiesManager Gestion de la persistense et chargemetns des objets
 * @package Rest\Persistance
 */
class EntitiesManager
{
    /**
     * @var  \PDO Objet de connexion
     */
    private $connection;
    /**
     * @var \Mapping Contient le mapping entre les tables et les entités
     */
    private $mappings;

    public function __construct()
    {
        $this->connection = Connection::getConnection();
        $this->mapping = new IConfigMapping();
    }

    /**
     * @param string $class
     *        Nom de la classe à instancier
     * @param array $stmt
     *        Statement contient le resultat de requête executée
     * @return array
     *         Cette fonction retourne un tableau d'objet de type $class
     */
    public function LoadSelect($class, $stmt)
    {
        $entity = $class;
        $mapping = $this->mapping->getMapping($class)['mapping'];
        $arrayOfObject = $arrayName = array();
        //........................................................
        foreach ($stmt as $ligne) {
            $entityObject = new  $entity();
            //....................................................
            foreach ($mapping as $key => $value) {
                if (array_key_exists($key, $ligne)) {
                    $attribute = $mapping[$key];
                    $attribute = ucfirst($attribute);
                    call_user_func_array(array($entityObject, 'set' . $attribute), array($ligne[$key]));
                } else {
                    echo 'mapping of key ' . $key . ' not exist';
                }
            }

        }
        return $arrayOfObject;
    }

    /**
     * @param $request
     *         La reqête SQL à executer
     * @param null $args
     *             Les arguements de la requête preparée
     * @return array
     *          La fontion retourne un tableau contient le résultat de la requête
     */
    public function executeSelect($request, $args = NULL)
    {
        $stmt = $this->connection->prepare($request);
        $stmt->execute($args);
        return $stmt->fetchAll();

    }

    /**
     * @param $class
     *         Nom de classe à instancier
     * @param $request
     *         Requête SQL à executer
     * @param null $args
     *        Les arguements de la requête preparée
     * @return array
     *        Cette fonction retourne un tableau d'objet de type $class
     */
    public function getObjects($class, $request, $args = NULL)
    {
        $arrayOfObject = $this->LoadSelect($class, $this->executeSelect($request, $args));
        return $arrayOfObject;

    }
}
?>
