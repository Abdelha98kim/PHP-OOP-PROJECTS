<?php
require_once "AbstractUniversity.php";

/**
 * Class University
 */
class University extends AbstractUniversity
{
    public function addSubject(string $code, string $name): Subject {
        
    $subject= new Subject($code,$name);
    array_push($this->subjects,$subject);

    return $subject;


    }

     public function addStudentOnSubject(string $subjectCode, Student $student){

            foreach ($this->subjects as $key => $subject) {
               if ($subjectCode == $subject->getCode()) {
                     array_push($subject->students, $student);
               }
            }

     }

     public function getStudentsForSubject(string $subjectCode){
      foreach ($this->subjects as $key => $subject) {
         if ($subjectCode == $subject->getCode()) {
            // array_values($subject);
            var_dump(array_values($subject->students));
         }
      }
     }

     public function getNumberOfStudents(): int{
                
        return 1;
     }

     public function print(){

     }


    
}