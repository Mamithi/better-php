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
        return true;
    }

    public function ship($parcel){
        # Send the parcel to this route
        return true;
    }
}