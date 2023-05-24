<?php
    include '../../config/database.php';

    session_start();
    if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] === 'teacher') {
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
    <title>Lớp giảng dạy</title>
</head>

<body>
    <h1>Danh sách lớp</h1>
    <a href="#" class="btn btn-primary">Thêm</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tên Lớp</th>
                <th scope="col">Thời gian</th>
                <th scope="col">Khóa học</th>
                <th scope="col">Kì học</th>
                <th scope="">Tên giảng viên</th>
                <td scope>Xóa</td>
                <td scope>Sửa</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($classes as $class) {
            ?>
                <tr>
                    <td><?php echo $class->class_name ?></td>
                    <td><?php echo $class->class_time ?></td>
                    <td><?php echo $class->course_name ?></td>
                    <td><?php echo $class->term ?></td>
                    <td><?php echo $class->teacher_name ?> </td>
                    <td>
                        <form action="#" method="POST">
                            <button onclick="return Del()" type="submit" name="" value="" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary">Sửa</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
    function Del() {
        return confirm("Bạn chắc chắn muốn xóa không?");
    }
</script>

</html>