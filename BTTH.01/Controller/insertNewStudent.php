<?php 
require_once '../Models/Student.php';
require_once '../Models/StudentList.php';

use Models\Student;
use Models\StudentList;

$file = file_get_contents("../database/students-data.csv");

if ($file !== false) {
    $datas = str_getcsv($file, "\n");
    $students = new StudentList();
    foreach ($datas as $data) {
      $splitData = explode(";", $data);
      $student = new Student($splitData[1], $splitData[2], $splitData[0], $splitData[3], $splitData[4]);
      $students->addStudent($student);
    }
    $code = $_POST['id'];
    $full_name = $_POST['full_name'];
    $class = $_POST['class'];
    $address = $_POST['address'];
    $phone_num = $_POST['phone_num'];
    $new_student = new Student($full_name, $class, $code, $address, $phone_num);
    $error = $students->checkStudent($new_student);
    if ($error == "") {
        $students->addStudent($new_student);
        $file = fopen("../database/students-data.csv", "a");
        $data = $new_student->code . ";" . $new_student->full_name . ";" . $new_student->class . ";" . $new_student->address . ";" . $new_student->phone_num . "\n";
        fwrite($file, $data);
        fclose($file);
        header("Location: ../view/index.php");
    } else {
        header("Location: ../view/index.php?error=" . urlencode($error));
        exit();
    }
} else {
    echo "Failed to read the file.";
}

?>