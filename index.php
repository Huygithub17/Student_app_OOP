<?php

use Myapp\Data\Database;
use Myapp\Student\Student;

require_once realpath("vendor/autoload.php");

//$data  = new Database();
$student = new Student(1, "Huy");
$student->setMarks(100,1,70,4.5,5);
echo $student->get_id(). "<br>";
echo $student->get_name();
echo $student->getMarks();

echo "<br>Total Score: ". $student->totalScore();
echo "<br>Average Score: ". $student->averageScore();

echo "<br>Student Grade: ". $student->grade();
echo "<br>Student final result: ". $student->finalResult();


include "./index2.php";