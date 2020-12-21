<?php
header('Content-Type: application/json');
require 'Validator.php';
require 'TicketsCounter.php';

$validator = new Validator($_GET['start'], $_GET['end']);
if (!$validator->validate()){
    print_r($validator->getErrors());
    die();
}
$tickets = new TicketsCounter($_GET['start'], $_GET['end']);

print_r(['count' => $tickets->getCount()]);

