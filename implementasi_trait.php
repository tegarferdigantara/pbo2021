<?php

use App\Person;

require_once('vendor/autoload.php');

$tegar = new Person;

$tegar->goodBye('Tegar Ferdigantara');

echo $tegar->birthDate('24', 'September', '2001');
