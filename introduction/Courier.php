<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/12/17
 * Time: 8:45 PM
 */

class courier
{
    public $name;
    public $home_country;

    public function __construct($name)
    {
        $this->name = $name;

        return TRUE;
    }

    public function ship($parcel)
    {
        # Send the parcel to this route
        return TRUE;
    }

    public function calculateShipping($parcel)
    {
        $rate = 1.78;

        $cost = $rate * $parcel->weight;

        return $cost;
    }
}