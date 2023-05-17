<?php 
use Models\Student;
class StudentList {
    public $student_list;

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
                return $error;
            }
            else {
                $this->addStudent($new_student);
            }
        }
    }

    
require_once 'Student.php';

$students = array();

// Đọc dữ liệu từ file
$data = file('DS.txt');

// Lặp qua từng dòng trong file
foreach ($data as $line) {
  // Chuyển đổi dữ liệu thành một đối tượng sinh viên và lưu vào mảng
  $fields = explode(',', trim($line));
  $code = $fields[0];
  $fullname = $fields[1];
  $class = $fields[2];
  $address = $fields[3];
  $phonenumber = $fields[4];
  $student = new Student($code, $fullname, $class, $address, $phonenumber );
  array_push($students, $student);
}

// Hiển thị danh sách sinh viên
foreach ($students as $student) {
  echo $student->getName() . ' - ' . $student->getDob() . ' - ' . $student->getEmail() . ' - ' . $student->getPhone() . '<br>';
}
}
