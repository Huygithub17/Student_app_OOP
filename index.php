<?php

use Myapp\Data\Database;
use Myapp\Student\Student;


require_once realpath("vendor/autoload.php");

$data  = new Database();
$student = new Student();