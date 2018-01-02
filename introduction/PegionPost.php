<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/19/17
 * Time: 6:50 PM
 */

class PegionPost extends Courier
{
    public function ship(Parcel $parcel)
    {
        return true;
    }
}