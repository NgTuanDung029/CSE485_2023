<?php

use Models\Student;


require_once('../models/Student.php');
require_once('../models/StudentList.php');

$studentList = new StudentList();

if (isset($_POST['add'])) {
  $code = $_POST['code'];
  $full_name = $_POST['full_name'];
  $class = $_POST['class'];
  $address = $_POST['address'];
  $phone_num = $_POST['phone_num'];
  $student = new Student($code, $full_name, $class, $address, $phone_num);
  $studentList->add($student);
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
  <h1>Students infomation</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Code</th>
        <th scope="col">Full Name</th>
        <th scope="col">Class</th>
        <th scope="col">Address</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($studentList->getAll() as $student) : ?>
        <tr>
          <td><?php echo $student->getCode(); ?></td>
          <td><?php echo $student->getFullName(); ?></td>
          <td><?php echo $student->getClass(); ?></td>
          <td><?php echo $student->getAddress(); ?></td>
          <td><?php echo $student->getPhone(); ?></td>
          <td><i class="fa-solid fa-trash-can"></i></td>
          <td><i class="fa-solid fa-pen"></i></td>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <form method="POST" action="">
    <div class="form-group">
      <h1 style="font-size:30px; color: blue;">Add student</h1>
      <label for="Add">Code</label>
      <input class="form-control" id="Code" type="text" name="code">
      <label for="Add">Full Name</label>
      <input class="form-control" id="Name" type="text" name="full_name">
      <label for="Add">Class</label>
      <input class="form-control" id="Class" type="text" name="class">
      <label for="Add">Address</label>
      <input class="form-control" id="Address" type="text" name="address">
      <label for="Add">Phone Number</label>
      <input class="form-control" id="Phone Number" type="text" name="phone_num">
      <input class='btn-add' type="submit" name="add" value="Add">
    </div>

  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>