<?php

namespace App\Interfaces;

interface GeographicCoordinateInterface
{
    public function setLongitude(float $longitude) : self;

    public function getLongitude() : float;

    public function setLatitude(float $latitude) : self;

    public function getLatitude() : float;

    public function setElevation(float $elevation) : self;

    public function getElevation() : float;
}
