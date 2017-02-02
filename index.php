<?php

require_once 'classes/Eleve.php';
require_once 'classes/Cote.php';

$mamadou = new Eleve('Sow','Mamadou','mamadou.sow@gmail.com');
$mamadou->setNom('TOTO');
$mamadou->setPresent(true);

$cote = new Cote();
$cote->setNomDuCours("Script server");
$cote->setValueInPercent(90);




$mamadou->addCote($cote);
if ($mamadou->isPresent() === true){
    echo $mamadou->getPrenom().' est présent';
}


