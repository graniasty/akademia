<?php
//require_once 'AbstractPerson.php';

  class Employee extends AbstractPerson
  {
      private $salary;
      private $comission;
      
      public function setSalary($salary){
          $this->salary = $salary;
          return $this;
      }
  }