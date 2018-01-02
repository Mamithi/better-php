<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 1/3/18
 * Time: 1:00 AM
 */
class Address {
    public $street_address_1;
    public $street_address_2;
    public $city_name;
    public $subdivision_name;
    public $postal_code;
    public $country_name;

    protected  $_address_id;
    protected $_time_created;
    protected $_time_updated;

    function display(){
        $output = '';
        $output .= $this->street_address_1;
        if($this->street_address_2){
            $output .= '<br/>' . $this->street_address_2;
        }
        $output .= '<br/>';
        $output .= $this->city_name . ' ' . $this->subdivision_name;
        $output .= ' ' . $this->postal_code;
        $output .= '<br/>';
        $output .= $this->country_name;

        return $output;
    }
}