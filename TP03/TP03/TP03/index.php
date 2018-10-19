<?php
require "Animal.php";
require "VueAnimal.php";
require "AnimauxManager.php";
$db = new PDO('mysql:host=localhost;dbname=grp-164', 'grp-164', 'EPUcrmMm');
$manager = new AnimauxManager($db);
$vue = new VueAnimal();
$Animaux = array();
$Animaux = $manager->getList();
if(sizeof($Animaux)>0){
    $vue->afficheAnimaux($Animaux);
}
?>