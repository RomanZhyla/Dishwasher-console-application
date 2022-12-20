<?php
namespace Cycles;

class PanAndPots extends AbstractWashcycle
{
    public function __construct()
    {
        $this->modeName = 'Pan & Pots';
        $this->waterAmount = 800;
        $this->waterTemperature = 65;
        $this->washTime = 100;
        $this->dryingMode = true;
    }
}