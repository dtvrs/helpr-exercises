<?php

namespace App\Interfaces;

use Carbon\Carbon;

interface LocationInterface
{
    public function setAddress(AddressInterface $address) : self;

    public function getAddress() : AddressInterface;

    public function setDesignation(string $designation) : self;

    public function getDesignation() : string;

    public function registerCarPickup(CarInterface $car);

    public function registerCarDrop(CarInterface $car);
}
