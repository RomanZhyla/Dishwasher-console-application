<?php
namespace Cycles;

use DateInterval;
use DateTimeImmutable;
use Interfaces\Washcycle;

abstract class AbstractWashcycle implements Washcycle
{
    protected $modeName = '';
    protected $waterAmount = null;
    protected $waterTemperature = null;
    protected $washTime = null;
    protected $dryingMode = false;

    public function getModeName(): string
    {
        return $this->modeName;
    }
    public function getWaterAmount(): ?float
    {
        return $this->waterAmount;
    }
    public function getWaterTemperature(): ?float
    {
        return $this->waterTemperature;
    }
    public function getWashTime(): ?float
    {
        return $this->washTime;
    }
    public function getDryingMode(): bool
    {
        return $this->dryingMode;
    }
    public function isDryingModeIncluded(): string
    {
        return $this->getDryingMode() ? 'Yes' : 'No';
    }

    public function runClean(): void
    {
        // Start wash cycle
        $this->echoStartWashingMessage();
    }

    public function echoStartWashingMessage(): void
    {
        $name = $this->getModeName();
        $waterAmount = $this->getWaterAmount();
        $waterTemperature = $this->getWaterTemperature();
        $washTime = $this->getWashTime();
        $dryingMode = $this->isDryingModeIncluded();

        $date = new DateTimeImmutable();
        $finishTime = $date->add(new DateInterval("PT{$washTime}M"))->format('l jS \o\f F Y h:i:s A');

        include APP_DIR.'/Views/startWashingMessage.php';
    }
}