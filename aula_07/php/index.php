<?php

require_once __DIR__ . "/Connection.php";
require_once __DIR__ . "/Course.php";
require_once __DIR__ . "/User.php";

$course = new Course();
var_dump($course->getCourses());
echo "\n";

$user = new User();
var_dump($user->getUsers());
echo "\n";
