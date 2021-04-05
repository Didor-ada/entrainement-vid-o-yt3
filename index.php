<?php
/* l'idée est de créer un nouveau eprsonnage, on créé un fichier par classe */

require 'personnage.php';

$merlin = new Personnage("Merlin"); // on passe la variable $merlin dans la classe personnage avec le new et les ()

$merlin->regenerer(5);

$harry = new Personnage("Harry");
$harry->regenerer();

$merlin->attaque($harry); //on va créer notre fonction attaque dans personnage.php

if ($harry->mort()){
    echo 'Harri est mort :(';
}else{
    echo 'Harry a survécu ' . $harry->vie;
}

//$harry->mort();  false si le personnage est vivant, true si il est mort

$harry->vie = 100;
var_dump($harry->mort());

var_dump($merlin);
var_dump($harry);

/*var_dump($merlin->vie); sert à voir merlin dans notre navigateur
quand on veut accéder à quelque chose dans l'objet, on récupère une variable avec la flèche*/