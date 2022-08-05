<?php

use Myapp\Data\Database;
use Myapp\Student\Student;

require_once realpath("vendor/autoload.php");

//$data  = new Database();
//$student = new Student(1, "Huy");
//$student->setMarks(100,1,70,4.5,5);\


include "./index2.php";

$txtname = $_POST['name'];
$id = $_POST['id'];

$php = $_POST['php'];
$java = $_POST['java'];
$nodejs = $_POST['nodejs'];
$ruby = $_POST['ruby'];
$cplusplus = $_POST['cplusplus'];

$student = new Student($id, $txtname);
$student->setMarks($php,$java,$nodejs,$ruby,$cplusplus);

//TODO ::
// echo $student->get_id(). "<br>";
// echo $student->get_name();
// echo $student->getMarks();
// echo "<br>Total Score: ". $student->totalScore();
// echo "<br>Average Score: ". $student->averageScore();
// echo "<br>Student Grade: ". $student->grade();
// echo "<br>Student final result: ". $student->finalResult();
// echo "<br>Remark: ". $student->remark();
//----
?>

<style>
table, th, td {
  border:1px solid black;
  margin-left: 241px;
}
</style>

<table style="width:60%">
  <tr>
    <th>#ID</th>
    <th> <?=$student->get_id()?> </th>
  </tr>
  <tr>
    <th>#Name</th>
    <th> <?=$student->get_name()?> </th>
  </tr>
  <tr>
    <th>PHP</th>
    <th> <?= $php ?> </th>
  </tr>
  <tr>
    <th>JAVA</th>
    <th> <?= $java ?> </th>
  </tr>
  <tr>
    <th>C++</th>
    <th> <?= $cplusplus?> </th>
  </tr>
  <tr>
    <th>Ruby</th>
    <th> <?= $ruby?> </th>
  </tr>
  <tr>
    <th>NodeJS</th>
    <th> <?= $nodejs?> </th>
  </tr>
  <tr>
    <th>Total Score</th>
    <th> <?= $student->totalScore()?> </th>
  </tr>
  <tr>
    <th>Average Score</th>
    <th> <?= $student->averageScore()?> </th>
  </tr>
  <tr>
    <th>Grade</th>
    <th> <?= $student->grade()?> </th>
  </tr>
  <tr>
    <th>Remark</th>
    <th> <?= $student->remark()?> </th>
  </tr>
  <tr>
    <th>Final Result</th>
    <th> <?= $student->finalResult()?> </th>
  </tr>

</table>