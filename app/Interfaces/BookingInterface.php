<?php

namespace App\Interfaces;

use Carbon\Carbon;

interface BookingInterface
{
    public function setPickupLocation(LocationInterface $location) : self;

    public function getPickupLocation() : LocationInterface;

    public function setDropLocation(LocationInterface $location) : self;

    public function getDropLocation() : LocationInterface;

    public function setStartTime(Carbon $start) : self;

    public function getStartTime() : Carbon;

    public function setEndTime(Carbon $start) : self;

    public function getEndTime() : Carbon;

    public function setUser(UserInterface $user) : self;

    public function getUser() : UserInterface;

    public function setCost(float $cost) : self;

    public function getCost() : float;
}
