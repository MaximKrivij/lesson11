<?php


trait Freight
{
    private $count;

    public function loadingCargo($numbPass)
    {
        if ($numbPass >= 0) {
            if (($numbPass + $this->count) > $this->getSpaciousness()) {
                die("Невозможно загрузить, больше максимального количества пасажиров!");
            } else {
                $this->count += $numbPass;
            }
        } else {
            die("Число должно быть положительным!");
        }
    }

    public function uploadingCargo($numbPass)
    {
        if ($numbPass >= 0) {
            if (($this->count - $numbPass) < 0) {
                die("Невозможно разгрузить, больше чем есть пасажиров!");
            } else {
                $this->count = $this->count - $numbPass;
            }
        } else {
                die("Число должно быть положительным!");
        }
    }
    public function uploadingAllCargo()
    {
        $this->count = $this->count - $this->count;
    }

    public function showNumbCargo()
    {
        return $this->count;
    }

    public function checkNumbCargo()
    {
        return $this->getSpaciousness() - $this->count;
    }

    public function port()
    {
        $this->action= 'В Порту:';
    }

    public function getInfoCargo()
    {
        echo '<br>Клас транспора:', get_class($this),'<br>';
        echo 'Тип транспорта:', $this->getType(),'<br>';
        echo 'Макс. Кол. тон:', $this->getSpaciousness(),'тон<br>';
        echo 'Загружено Кол. тон:', $this->showNumbCargo(),'тон<br>';
        echo 'Свободного места:', $this->checkNumbCargo(),'тон<br>';
        echo 'Состояние:',$this->Action(),'<br>';
    }

}