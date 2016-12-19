<?php

namespace App\Interfaces;

interface UserInterface
{
    public function setName(string $name) : self;

    public function getName() : string;

    public function setVat(string $nif) : self;

    public function getVat() : string;

    public function setEmail(string $email) : self;

    public function getEmail() : string;

    public function setPhoneContact(string $phoneContact) : self;

    public function getPhoneContact() : string;
}
