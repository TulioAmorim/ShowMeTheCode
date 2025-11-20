<?php

require __DIR__ . '/../vendor/autoload.php';

use Candidato\Candidato;
use Address\Address;
use PartidoPolitico\Partido;

$address = new Address("Salvador");

$address2 = new Address("Maringa");

$candidato1 = new Candidato("Tulio", "Brasileira", 30, "Masculino", true , "123321", $address);

echo "---------------------------------\n Todo canditado, por lei, tem que ser alfabetizado" . PHP_EOL;

echo "Alfabetizado ? -> " . $candidato1->getLiterate() . PHP_EOL;

echo "---------------------------------\n Informacoes do candidato" . PHP_EOL;

echo $candidato1->getPessoaInfo();

$presidentePartido = new Candidato("Luiz", "Brasileira", 30, "Masculino", true , "123321", $address2);

$partidoAGZ = new Partido("Agilize", "AGZ", $presidentePartido);

echo "---------------------------------\n Patido sem candidato" . PHP_EOL;

echo $partidoAGZ->getPartidoInfo();

echo "---------------------------------\n adiciona um canditado ao partido";

$partidoAGZ->addCandidato($candidato1);

echo $partidoAGZ->getPartidoInfo();