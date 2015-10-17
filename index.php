<?php
//komentarz do sprawdzenia działanie gita
error_reporting(E_ALL);
ini_set('display_errors',1);

//require_once 'vendor/Employee.php';

spl_autoload_register('Autoloader');
function Autoloader($className)
{
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require_once 'vendor/'.$class.'.php';
}

use Academy\Employee;

$john = new Employee("john", "smith", 22, "f");
$jane = new Employee("jane", "smith", 23, "m");
echo $john->hello();


