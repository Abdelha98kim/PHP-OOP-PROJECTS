<?php
/**
 * User: TheCodeholic
 * Date: 4/8/2020
 * Time: 10:40 PM
 */

/**
 * Class Student
 */
class Student
{
    private string $name;
    private string $studentNumber;

    public function __construct($name, $studentNumber){
        $this->name = $name;
        $this->studentNumber = $studentNumber;
    }

    public function getName (){
        return $this->name;
    }
    public function setName ($nom){
        $this->name = $nom;
    }

    public function getStudentNumber (){
        return $this->studentNumber;
    }
    public function setStudentNumber ($studentNumber){
        $this->studentNumber = $studentNumber;
    }
    // TODO Generate getters and setters for both arguments
    // TODO Generate constructor with both arguments.
}