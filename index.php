<?php
require_once 'vendor/autoload.php';



$log = new \App\logger\Logger();


$context['file'] = __FILE__;
$context['dateTime'] = date('d-m-Y H:i:s');

$log->log('info', 'It is message', $context);

