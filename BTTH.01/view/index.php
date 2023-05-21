<?php
<<<<<<< HEAD
require_once('../Models/Student.php');
require_once('../Models/StudentList.php');
=======
>>>>>>> 238bb0aacdbf8cb1780883a668c13f31c09eda33

use Models\Student;
use Models\StudentList;


<<<<<<< HEAD
if ($file !== false) {
    $datas = str_getcsv($file, "\n");
    $students = new StudentList();
    foreach ($datas as $data) {
      $splitData = explode(";", $data);
      $student = new Student($splitData[1], $splitData[2], $splitData[0], $splitData[3], $splitData[4]);
      $students->addStudent($student); 
    }
} else {
    echo "Failed to read the file.";
=======
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
>>>>>>> 238bb0aacdbf8cb1780883a668c13f31c09eda33
}

?>

<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        echo "<div class='alert alert-warning'>Error: ".htmlspecialchars($error)."</div>";
    }
    ?>
  <div class="container" style="width: 30%">
  <h2 style="text-align: center;">Add New Student</h2>
    <form action="../Controller/insertNewStudent.php" method="post">
      <div class="form-group">
        <label for="studentID">Student ID</label>
        <input type="text" class="form-control" name="id" placeholder="Enter ID">
      </div>
      <div class="form-group">
        <label for="studentName">Full Name</label>
        <input type="text" class="form-control" name="full_name" placeholder="Enter Full name">
      </div>
      <div class="form-group">
        <label for="studentClass">Class</label>
        <input type="text" class="form-control" name="class" placeholder="Enter Class">
      </div>
      <div class="form-group">
        <label for="studentAddress">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Enter Address">
      </div>
      <div class="form-group">
        <label for="studentPhoneNum">Phone number</label>
        <input type="number" class="form-control" name="phone_num" placeholder="Enter Phone number">
      </div>
      <button type="submit" class="btn btn-primary" style="margin-top:10px">Add</button>
    </form>
  </div>
  <div class="container">
  <h2 style="text-align: center;">List of Students</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Code</th>
          <th scope="col">Full Name</th>
          <th scope="col">Class</th>
          <th scope="col">Address</th>
          <th scope="col">Phone Number</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($students->student_list as $student) {
        ?>
        <tr>
          <th scope="row"><?= $student->code ?></th>
          <td><?= $student->full_name ?></td>
          <td><?= $student->class ?></td>
          <td><?= $student->address ?></td>
          <td><?= $student->phone_num ?></td>
        </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
=======
>>>>>>> 238bb0aacdbf8cb1780883a668c13f31c09eda33

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