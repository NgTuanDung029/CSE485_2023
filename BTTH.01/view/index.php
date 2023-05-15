<?php
include_once('../models/Student.php');
require('../models/StudentList.php');

use Models\Student;

$file = file_get_contents("../database/students-data.csv");

if ($file !== false) {
  $datas = str_getcsv($file, "\n");
  $students = new StudentList();
} else {
  echo "Failed to read the file.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Code</th>
        <th scope="col">Full Name</th>
        <th scope="col">Class</th>
        <th scope="col">Address</th>
        <th scope="col">Phone Number</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($datas as $data) {
        $splitData = explode(";", $data);
        $student = new Student($splitData[1], $splitData[2], $splitData[0], $splitData[3], $splitData[4]);
        $students->addStudent($student);
      ?>
        <tr>
          <th scope="row"><?= $student->code ?></th>
          <td><?= $student->full_name ?></td>
          <td><?= $student->class ?></td>
          <td><?= $student->address ?></td>
          <td><?= $student->phone_num ?></td>
          <td><button><i class="fa-solid fa-trash-can"></i></button></td>
          <td><button><i class="fa-solid fa-pen-to-square"></i></button></i></td>
        </tr>
      <?php }
      ?>

    </tbody>
  </table>

  <form action="/action_page.php">
<div class="form-group">
    <h1 style="font-size:30px; color: blue;">Add student</h1>
    <label for="Add">Code</label>
    <input class="form-control" id="Code">
    <label for="Add">Full Name</label>
    <input class="form-control" id="Name">
    <label for="Add">Class</label>
    <input class="form-control" id="Class">
    <label for="Add">Address</label>
    <input class="form-control" id="Address">
    <label for="Add">Phone Number</label>
    <input class="form-control" id="Phone Number">
  </div>
  
</form>


  <button class="btn-add">Add</button>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>