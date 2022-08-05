<?php

namespace Myapp\Student;

class Student
{
    public $name;
    public $id;
    public $a, $b, $c, $d, $e;
    public function __construct($id, $name)
    {
        $this->name = $name;
        $this->id = $id;
    }
    function get_id()
    {
        return $this->id;
    }
    function get_name()
    {
        return $this->name;
    }
    function setMarks(float $a, float $b, float $c, float $d, float $e)
    {
        //todo::
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->d = $d;
        $this->e = $e;
    }
    function getMarks()
    {
        //todo::
        echo "<br> A:" . $this->a;
        echo " B:" . $this->b;
        echo " C:" . $this->c;
        echo " D:" . $this->d;
        echo " E:" . $this->e;
    }

    function totalScore()
    {
        $aa = $this->a;
        $bb = $this->b;
        $cc = $this->c;
        $dd = $this->d;
        $ee = $this->e;
        return $aa + $bb + $cc + $dd + $ee;
    }

    function averageScore()
    {
        return (self::totalScore()) / 5;
    }

    function grade()
    {
        $avg = $this->averageScore();
        if ($avg >= 70 && $avg <= 100) {
            return "A";
        }
        if ($avg >= 60 && $avg <= 69.9) {
            return "B";
        }
        if ($avg >= 50 && $avg <= 59.9) {
            return "C";
        }
        if ($avg >= 40 && $avg <= 49.9) {
            return "D";
        }
        if ($avg > 0 && $avg <= 39.9) {
            return "F";
        }
    }
    function remark()
    {
        switch ($this->grade()) {
            case "A":
                return "Excellent";
            case "B":
                return "Very good";
            case "C":
                return "Good";
            case "D":
                return "Fair";
            default:
                return "Very poor";
        }
    }
    function finalResult(){
        if($this->averageScore()<40){
            return "Fail";
        }else{
            return "Pass";
        }
    }
}
