<?php
require_once '../../config/database.php';
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] === 'student') {
    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
} else {
    header("Location: ../../index.php");
    exit;
}

$query = "SELECT * FROM class,course, teacher_class, teacher where teacher.teacher_id = teacher_class.teacher_id and course.course_id = class.course_id";
$statement = $conn->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_OBJ);
$classes = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <h1>Các môn học đang mở</h1>
    <div class="card" style="width: 18rem;">
        <?php
        foreach ($classes as $class) {
        ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $class->course_name ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $class->class_name ?></h6>
                <p class="card-text">Học kì <?php echo $class->term ?></p>
                <p class="card-text">Thời gian <?php echo $class->class_time ?></p>
                <button type="button" class="btn btn-info">Điểm danh</button>
            <?php
        }
            ?>
            </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>