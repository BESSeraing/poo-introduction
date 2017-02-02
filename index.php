<?php

require_once 'classes/Eleve.php';
require_once 'classes/Cote.php';

$mamadou = new Eleve('Sow','Mamadou','mamadou.sow@gmail.com');
$mamadou->setPresent(true);

$cote = new Cote();
$cote->nomDuCours = "Script server";
$cote->valueInPercent = 90;

$coteScriptClient = new Cote();
$coteScriptClient->nomDuCours = "Script Client";
$coteScriptClient->valueInPercent = 85;


$mamadou->addCote($cote);
$mamadou->addCote($coteScriptClient);

if ($mamadou->isPresent() === true){
    echo $mamadou->getPrenom().' est présent';
}


