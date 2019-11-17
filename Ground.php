<?php
error_reporting(E_ALL);
require_once 'Passenger.php';
require_once 'Freight.php';
require_once 'AbstractFile.php';
class Ground extends AbstractFile
{
    use Freight;
    use Passenger;
    private $action;
    private $info;

    public function getInfo()
    {
        if ($this->getType() === 'passenger') {
            return $this->getInfoPass();
        } elseif ($this->getType() === 'freight') {
            return $this->getInfoCargo();
        } else {
            die("Вы указали Не верный тип транспорта!");
        }
    }

    public function Action()
    {
        return $this->action;
    }

    public function Rides()
    {
        $this->action = 'Едет';
    }

    public function Loading()
    {
        $this->action = 'Загружается';
    }

    public function Uploading()
    {
        $this->action = 'Разружается';
    }

    public function Stop()
    {
        if ($this->showNumbPass() > 0) {
            die("Транспорт не может перейти в состояние стоит,пока он не пустой!");
        } else {
            $this->action = 'Стоит';

        }
    }
}