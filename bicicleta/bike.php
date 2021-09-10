<?php

require_once 'pedal.php';

$role1 = new Pedal;
$role1->setHorario('noite');
$role1->setAcompanhamento('N');
$role1->setDuracao('longa');
$role1->setLocal('subida');
$role1->getHorario();
$role1->getAcompanhamento();
$role1->getDuracao();
$role1->getLocal();
