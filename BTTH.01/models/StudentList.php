<?php 
include './Student.php';

class StudentList {
    private $student_list;

    public function __construct() {
        $this->student_list = array();
    }

    public function addStudent(Student $student) {
        array_push($this->student_list, $student);
    }

    public function checkStudent(Student $new_student) {
        $list_size = sizeof($this->student_list);
        $error = "";
        for ($i = 0; $i < $list_size; $i++)
        {
            if ($this->student_list[$i]->code == $new_student->code)
            {
                $error = "Student's code duplicated. Please enter the new one.";
            }
            else {
                $this->addStudent($new_student);
            }
        }
    }
}



?>