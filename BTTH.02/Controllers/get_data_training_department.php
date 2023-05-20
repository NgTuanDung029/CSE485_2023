<?php
include_once('../Models/connectDB.php');
$conn = connectDB();
$stmt = $conn->prepare("select course_id, course_name, course_desc from course");
$stmt->execute();
$courses = $stmt->fetchAll();
