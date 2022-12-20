<?php
namespace Cycles;

class DryCycle extends AbstractWashcycle
{
    public function __construct()
    {
        $this->modeName = 'Dry cycle';
        $this->waterAmount = null;
        $this->waterTemperature = null;
        $this->washTime = null;
        $this->dryingMode = true;
    }
}