<?php
include_once('../Models/connectDB.php');
include_once('../Controllers/get_data_training_department.php');
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
    <div class="container">
        <div class="row justify-content-center">
            <h1>Danh sách môn học hiện thời</h1>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã khóa học</th>
                <th scope="col">Tên khóa học</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Xóa</th>
                <th scope="col">Sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($courses as $course) {
            ?>
                <tr>
                    <td><?php echo $course['course_id'] ?></td>
                    <td><?php echo $course['course_name'] ?></td>
                    <td><?php echo $course['course_desc'] ?></td>
                    <td><i class="fa-solid fa-trash"></i></td>
                    <td><i class="fa-regular fa-pen-to-square"></i></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>