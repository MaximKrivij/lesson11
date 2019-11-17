<?php


trait Passenger
{
    private $count;

    public function loadingPass($numbPass)
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

    public function uploadingPass($numbPass)
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

    public function uploadingAllPass()
    {
        $this->count = $this->count - $this->count;
    }

    public function showNumbPass()
    {
        return $this->count;
    }

    public function checkNumbPass()
    {
        return $this->getSpaciousness() - $this->count;
    }

    public function getInfoPass()
    {
        echo '<br>Клас транспора:', get_class($this),'<br>';
        echo 'Тип транспорта:', $this->getType(),'<br>';
        echo 'Макс. Кол. пасажиров:', $this->getSpaciousness(),'<br>';
        echo 'Кол. пасажиров:', $this->showNumbPass(),'<br>';
        echo 'Свободного места:', $this->checkNumbPass(),'<br>';
        echo 'Состояние:',$this->Action(),'<br>';
    }
}