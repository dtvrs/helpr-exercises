<?php

namespace App\Interfaces;

interface AddressInterface
{
    public function setCoordinates(GeographicCoordinateInterface $coordinates) : self;

    public function getCoordinates() : GeographicCoordinateInterface;

    public function setAddressLine1(string $addressLine1) : self;

    public function getAddressLine1() : string;

    public function setAddressLine2(string $addressLine2) : self;

    public function getAddressLine2() : string;

    public function setCity(string $city) : self;

    public function getCity() : string;

    public function setState(string $state) : self;

    public function getState() : string;

    public function setPostalCode(string $postalCode) : self;

    public function getPostalCode() : string;

    public function setCountry(string $country) : self;

    public function getCountry() : string;
}
