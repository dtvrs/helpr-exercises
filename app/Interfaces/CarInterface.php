<?php

namespace App\Interfaces;

interface CarInterface
{
    public function setBrand(string $brand) : self;

    public function getBrand() : string;

    public function setModel(string $model) : self;

    public function getModel() : string;

    public function setColor(string $color) : self;

    public function getColor()  : string;

    public function setBuildYearAndMonth(int $year, int $month = null) : self;

    public function getBuildYear() : int;

    public function getBuildMonth() : int;
}
