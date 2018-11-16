<?php

/**
 * Class1 short summary.
 *
 * Class1 description.
 *
 * @version 1.0
 * @author yv066840
 */
class Animal
{
    private $_id;
    private $_nom;
    private $_espece;
    private $_cri;
    private $_proprietaire;
    private $_age;

    public function __toString(){
        return "id : ".$this->id()." Nom : ".$this->nom()." Espece : ".$this->espece()." Cri : ".$this->cri()." Proprio : ".$this->proprietaire()." Age : ".$this->age();
    }

    public function __construct(array $donnees){
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees){
        foreach($donnees as $key => $value){
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    public function id(){
        return $this->_id;
    }

    public function setId($id){
        $id = (int) $id;
        if ($id > 0){
            $this->_id = $id;
        }
    }

    public function nom(){
        return $this->_nom;
    }

    public function setNom($nom){
        $nom = (String) $nom;
        $this->_nom = $nom;
    }
    public function espece(){
        return $this->_espece;
    }
    public function setEspece($espece){
        $espece = (String) $espece;
        $this->_espece = $espece;
    }
    public function cri(){
        return $this->_cri;
    }
    public function setCri($cri){
        $cri = (String) $cri;
        $this->_cri = $cri;
    }
    public function proprietaire(){
        return $this->_proprietaire;
    }
    public function setProprietaire($proprietaire){
        $proprietaire = (String) $proprietaire;
        $this->_proprietaire = $proprietaire;
    }
    public function age(){
        return $this->_age;
    }
    public function setAge($age){
        $age = (String) $age;
        $this->_age = $age;
    }


}

?>