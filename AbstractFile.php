<?php

error_reporting(E_ALL);
abstract class AbstractFile
{
    private $spaciousness;
    private $type;

    public abstract function Action();

    public function __construct($spaciousness, $type) //Задаем вместительность и тип транспорта
    {
        $this->spaciousness = $spaciousness;
        $this->type = $type;
    }
    public function getSpaciousness()
    {
        return $this->spaciousness;
    }

    public function getType()
    {
        return $this->type;
    }









}