<?php
/**
 * User: TheCodeholic
 * Date: 4/8/2020
 * Time: 10:16 PM
 */

/**
 * Class Subject
 */
class Subject
{
    public $code;
    public $name;
    /**
     * @var Student[]
     */
    public $students = [] ;



      public function __construct($code,$name){
        $this->name = $name;
        $this->code= $code;
    }

    public function getName (){
        return $this->name;
    }
    public function setName ($nom){
        $this->name = $nom;
    }

    public function getCode (){
        return $this->code;
    }
    public function setCode ($code){
        $this->code= $code;
    }
    // TODO Generate getters and setters
    // TODO Generate constructor for all attributes. $students argument of the constructor can be empty

    /**
     * Method accepts student name and number, creates instance of the Student class, adds inside $students array
     * and returns created instance
     *
     * @param string $name
     * @param string $studentNumber
     * @return \Student
     */
    public function addStudent(string $name, string $studentNumber): Student
    {
        $student = new Student($name,$studentNumber);
        array_push($this->students,$student);
        return $student;
        // TODO Implement method according to method annotation
    }
    
   

}
