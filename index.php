<?php
require_once __DIR__ . '/vendor/autoload.php';

use ZunYue\Foundation\Application;

$zunyue = new Application([
    'alidayu' => [
        'b' => 'a'
    ]
]);
$zunyue->alidayu->aa();