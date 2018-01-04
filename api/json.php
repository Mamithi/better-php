<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 1/4/18
 * Time: 2:47 PM
 */

$jsonData = '[{"title":"The Magic Flute","time":1329636600},{"title":"Vilvaldi Four Seasons","time":1329631000},{"title":"Mozart\'s Requiem","time":1329635610}]';

$concerts = json_decode($jsonData, true);
print_r($concerts);