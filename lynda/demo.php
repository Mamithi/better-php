<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 1/3/18
 * Time: 1:24 AM
 */

require 'class.Address.inc.php';

echo '<h2>Instantiating Address</h2>';
$address = new Address;

echo '<h2>Empty Address</h2>';
echo '<pre>' . var_export($address, TRUE) . '</pre>';

echo '<h2>Setting properties</h2>';
$address->street_address_1 = 'Kimathi street';
$address->city_name = 'Nairobi';
$address->subdivision_name = 'CBD';
$address->postal_code = '12345';
$address->country_name = 'Kenya';
echo '<pre>' . var_export($address, TRUE) . '</pre>';

echo '<h2>Displaying address...</h2>';
echo $address->display();

echo '<h2>Testing protected access</h2>';
echo "Address ID: {$address->_address_id}";