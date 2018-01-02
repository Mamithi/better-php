<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 12/19/17
 * Time: 6:21 PM
 */

require 'Courier.php';

$mono = new Courier('Monospace Delivery');

echo "Courier Name: " . $mono->name;

$mono->ship($parcel);