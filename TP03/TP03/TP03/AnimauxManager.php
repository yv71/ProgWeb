<?php

/**
 * Class1 short summary.
 *
 * Class1 description.
 *
 * @version 1.0
 * @author yv066840
 */
class AnimauxManager
{
    private $_db;

    public function __construct($db) {
        $this->setDb($db);
    }
    public function setDb(PDO $db) {
        $this->_db = $db;
    }

    public function get($id){
        $id = (int) $id;
        $q = $this->_db->query('SELECT id, nom, espece, cri, proprietaire, age FROM animaux WHERE id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Animal($donnees);
    }

    public function getList() {
        $animaux = array();
        $q = $this->_db->query('SELECT id, nom, espece, cri, proprietaire, age FROM animaux ORDER BY nom');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $animaux[] = new Animal($donnees);
        }
        return $animaux;
    }
}

?>