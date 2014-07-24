<?php

include __DIR__ . '/vendor/autoload.php';

$carro = new Modelo\Fiesta;
$carro->nome();
$carro->acelerar();
$carro->travar();
$carro->setGPSmodel(new GPS\GPSglobal);
$carro->gps();
$carro->setGPSmodel(new GPS\GPSpt);
$carro->gps();