<?php

namespace Address;

class Address
{
    private string $city;

    public function __construct(string $city) {
        $this->city = $city;
    }
}