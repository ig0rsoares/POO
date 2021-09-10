<?php

require_once 'pedal.php';

$role1 = new Pedal('manha', 'plano', 'curta', 'N');
$role1->getHorario();
$role1->getAcompanhamento();
$role1->getDuracao();
$role1->getLocal();

echo "<br>";

$role2 = new Pedal('tarde', 'subida', 'longa', 'S');
$role2->getHorario();
$role2->getAcompanhamento();
$role2->getDuracao();
$role2->getLocal();
