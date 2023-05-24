<?php
<<<<<<< HEAD
namespace Models;
=======

>>>>>>> 238bb0aacdbf8cb1780883a668c13f31c09eda33
use Models\Student;

class StudentList extends Student
{
    public $students = [];

    public function __construct()
    {
        $this->loadData();
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
                $error = "Student's code duplicated. Please try again.";
                return $error;
            }
        }
        $this->addStudent($new_student);
        return $error;
    }

    public function getAll()
    {
        return $this->students;
    }

    public function getByCode($code)
    {
        foreach ($this->students as $student) {
            if ($student->getCode() == $code) {
                return $student;
            }
        }
        return null;
    }

    public function add($student)
    {
        if ($this->getByCode($student->getCode()) == null) {
            array_push($this->students, $student);
            $this->saveData();
            return true;
        }
        return false;
    }


    private function saveData()
    {
        $handle = fopen("../database/students-data.csv", "w");
        foreach ($this->students as $student) {
            fputcsv($handle, [$student->getCode(), $student->getFullName(), $student->getClass(), $student->getAddress(), $student->getPhone()]);
        }
        fclose($handle);
    }
}
