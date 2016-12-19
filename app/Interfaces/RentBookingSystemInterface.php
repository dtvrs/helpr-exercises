<?php

namespace App\Interfaces;

use Carbon\Carbon;

interface RentBookingSystemInterface
{
    public function getAllLocations() : array;

    public function getAllCarsAvailableAtPickupLocation(LocationInterface $pickUpLocation) : array;

    public function getPickupTimes(LocationInterface $pickUpLocation) : array;

    public function getRentingCost(LocationInterface $pickUpLocation, LocationInterface $dropLocation, CarInterface $car, UserInterface $user, Carbon $starTime, Carbon $endTime) : float;

    public function bookCar(LocationInterface $pickUpLocation, LocationInterface $dropLocation, CarInterface $car, UserInterface $user, Carbon $starTime, Carbon $enddTime, float $cost) : BookingInterface;

    public function processCarPickup(BookingInterface $bookingInterface) : self;

    public function processCarDrop(BookingInterface $bookingInterface) : self;
}
