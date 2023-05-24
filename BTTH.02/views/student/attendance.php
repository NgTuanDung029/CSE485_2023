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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles.css">
    <title>Document</title>
</head>
<body>
<h1>Điểm danh sinh viên</h1>

<div class="student-form">

    <label for="student-code">Mã sinh viên:</label>
    <input type="text" id="student-code">

    <label for="student-name">Họ tên sinh viên:</label>
    <input type="text" id="student-name">

    <label for="student-class">Lớp:</label>
    <input type="text" id="student-class">
</div>

<td class="attendance">
                        <input type="checkbox" id="present-1" class="present-checkbox">
                        <label for="present-1" class="custom-checkbox">Có mặt</label>
                        <input type="checkbox" id="absent-1" class="absent-checkbox">
                        <label for="absent-1" class="custom-checkbox">Vắng mặt</label>
                    </td>

<div class="submit-btn">
    <button type="button" onclick="submitAttendance()">Gửi điểm danh</button>
</div>

</body>
</html>