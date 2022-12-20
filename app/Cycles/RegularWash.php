<?php
namespace Cycles;

class RegularWash extends AbstractWashcycle
{
    public function __construct()
    {
        $this->modeName = 'Regular Wash';
        $this->waterAmount = 500;
        $this->waterTemperature = 50;
        $this->washTime = 45;
        $this->dryingMode = true;
    }
}