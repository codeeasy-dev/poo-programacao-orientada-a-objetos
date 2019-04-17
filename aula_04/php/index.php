<?php

require_once __DIR__ . "/Log.php";

$log = new Log("info.log");

$log->writeLine("ERROR: Test");
$log->writeLine("SUCCESS: Ok");
$log->writeLine("WARNING: ?");

var_dump($log->getLog());
