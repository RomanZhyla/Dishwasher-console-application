<?php
namespace Interfaces;

interface Washcycle
{
    public function getModeName(): string;
    public function getWaterAmount(): ?float;
    public function getWaterTemperature(): ?float;
    public function getWashTime(): ?float;
    public function getDryingMode(): bool;
    public function runClean(): void;
    public function echoStartWashingMessage(): void;
}