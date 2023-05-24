<?php 
    require_once '../config/database.php';
    session_start();
    if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] === 'teacher') {
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
    <title>Document</title>
</head>
<body>
    
<h1>Điểm danh sinh viên</h1>

    <div class="student-list">
        <table>
            <thead>
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Tên sinh viên</th>
                    <th>Điểm danh</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SV001</td>
                    <td>Nguyễn Văn A</td>
                    <td><input type="checkbox" name="attendance[]" value="SV001"></td>
                </tr>
                <tr>
                    <td>SV002</td>
                    <td>Trần Thị B</td>
                    <td><input type="checkbox" name="attendance[]" value="SV002"></td>
                </tr>
                <!-- Thêm các dòng cho các sinh viên khác -->
            </tbody>
        </table>
    </div>

    <div class="submit-btn">
        <button type="button" onclick="submitAttendance()">Gửi điểm danh</button>
    </div>

</body>
</html>