<?php
require "Animal.php";
require "VueAnimal.php";
require "AnimauxManager.php";


$db = new PDO('mysql:host=localhost;dbname=grp-164', 'grp-164', 'EPUcrmMm', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$manager = new AnimauxManager($db);
require "ajout.php";
$vue = new VueAnimal();
$Animaux = array();
$Animaux = $manager->getList();
if(sizeof($Animaux)>0){
    $vue->afficheAnimaux($Animaux);
}

?>