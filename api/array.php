<?php
/**
 * Created by PhpStorm.
 * User: mamithi
 * Date: 1/4/18
 * Time: 2:41 PM
 */

$concerts = [
    [
        'title' => "The Magic Flute",
        'time'  => 1329636600,
    ],
    [
        'title' => 'Vilvaldi Four Seasons',
        'time'  => 1329631000,
    ],
    [
        'title' => "Mozart's Requiem",
        'time'  => 1329635610,
    ],
];

echo json_encode($concerts);