<?php
require_once 'config/database.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = checkLogin($username, $password);

    if ($user !== null) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] === 'student') {
            header('Location: views/student/dashboard.php');
            exit;
        } elseif ($user['role'] === 'teacher') {
            header('Location: views/teacher/dashboard.php');
            exit;
        }
    } else {
        $error = "Thông tin đăng nhập không chính xác. Vui lòng thử lại.";
    }
}
function checkLogin($username, $password)
{
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=attendance_management;charset=utf8mb4", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM user_ WHERE username = :username";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && $password == $user['password']) {
            return $user;
        }
    } catch (PDOException $e) {
        die("Lỗi kết nối CSDL: " . $e->getMessage());
    }
    return null;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container d-flex justify-content-center flex-column" style="margin: auto">
        <h1>Đăng nhập</h1>
        <?php if (isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>

        <form method="POST" action="index.php">
            <div class="mb-3 w-25">
                <label for="username" class="form-label">Tài khoản</label>
                <input type="text" name="username" class="form-control" placeholder="name">
            </div>
            <div class="mb-3 w-25">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" name="password" class="form-control" placeholder="********">
            </div>
            <input type="submit" class="btn btn-primary" value="Đăng nhập">
        </form>
    </div>
</body>

</html>