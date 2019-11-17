<?php
require_once 'Air.php';
require_once 'Swimming.php';
require_once 'Ground.php';
error_reporting(E_ALL);

$airplane = new Air('121','passenger'); //int max. spaciousness and string type('passenger' or 'freight')
$tanker = new Swimming('380000','freight'); //int max. spaciousness and string type('passenger' or 'freight')
$truck = new Ground('20','freight'); //int max. spaciousness and string type('passenger' or 'freight')

$airplane->loadingPass('90'); //Загружаем 90 пасажиров
$airplane->Flies(); //Вызываем метод перелет
$airplane->loadingPass('30'); //Загружаем 30 пасажиров
$airplane->Flies(); //Вызываем метод перелет
$airplane->uploadingAllPass(); //Выгружаем всех пасажиров
$airplane->getInfo(); //Вызываем метод получения информации о транспорте

$tanker->port(); //Вызываем метод Порт
$tanker->loadingCargo('300000'); //Загружаем 300000 тыс. тон
$tanker->uploadingCargo('20000'); //Выгружаем 20000 тысю тон
$tanker->loadingCargo('100000'); //Загружаем 100000 тыс. тон
$tanker->uploadingAllCargo(); //Выгружаем весь груз
$tanker->getInfo(); //Вызываем метод получения информации о транспорте

$truck->port(); //Вызываем метод Порт
$truck->loadingCargo('12'); //Загружаем 12 тон
$truck->loadingCargo('8'); //Загружаем 8 тон
$truck->uploadingAllCargo(); //Выгружаем весь груз
$truck->getInfo(); //Вызываем метод получения информации о транспорте





