<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

require_once 'vendor/Employee.php';
$john = new Employee("john", "smith", 22, "f");
$jane = new Employee("jane", "smith", 23, "m");
echo $john->hello();


