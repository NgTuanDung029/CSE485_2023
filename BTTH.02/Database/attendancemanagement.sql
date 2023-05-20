-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2023 lúc 07:50 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `attendancemanagement`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE `attendance` (
  `attendance _id` varchar(99) NOT NULL,
  `attendance_date` varchar(99) NOT NULL,
  `class_id` varchar(99) NOT NULL,
  `std_id` varchar(99) NOT NULL,
  `teacher_id` varchar(99) NOT NULL,
  `attendance_status` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `attendance`
--

INSERT INTO `attendance` (`attendance _id`, `attendance_date`, `class_id`, `std_id`, `teacher_id`, `attendance_status`) VALUES
('AT01', '18/5/2023', 'CSE485_TH2', '205106123', 'TC01', 'Có mặt'),
('AT02', '18/5/2023', 'CSE485_TH2', '205106456', 'TC01', 'Vắng mặt'),
('AT03', '18/5/2023', 'CSE485_TH2', '205106789', 'TC01', 'Muộn 30p');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `class_id` varchar(99) NOT NULL,
  `class_name` varchar(99) NOT NULL,
  `course_id` varchar(99) NOT NULL,
  `class_time` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `course_id`, `class_time`) VALUES
('CSE485_TH2', '62TH2', 'CSE485', '18/5/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `course_id` varchar(99) NOT NULL,
  `course_name` varchar(99) NOT NULL,
  `course_desc` varchar(99) NOT NULL,
  `department_id` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `department_id`) VALUES
('CSE485', 'Công nghệ Web', 'Lập trình PHP', 'TP01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `std_id` varchar(99) NOT NULL,
  `std_name` varchar(99) NOT NULL,
  `std_DoB` varchar(99) NOT NULL,
  `std_email` varchar(99) NOT NULL,
  `std_pw` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`std_id`, `std_name`, `std_DoB`, `std_email`, `std_pw`) VALUES
('205106123', 'Nguyễn Văn A', '1/1/2001', 'a@tlu.edu.vn', '123'),
('205106456', 'Nguyễn Văn B', '2/2/2002', 'b@tlu.edu.vn', '456'),
('205106789', 'Nguyễn Văn C', '3/3/2003', 'c@e.tlu.edu.vn', '789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_class_registration`
--

DROP TABLE IF EXISTS `student_class_registration`;
CREATE TABLE `student_class_registration` (
  `std_id` varchar(99) NOT NULL,
  `class_id` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student_class_registration`
--

INSERT INTO `student_class_registration` (`std_id`, `class_id`) VALUES
('205106123', 'CSE485_TH2'),
('205106456', 'CSE485_TH2'),
('205106789', 'CSE485_TH2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `teacher_id` varchar(99) NOT NULL,
  `teacher_name` varchar(99) NOT NULL,
  `teacher_email` varchar(99) NOT NULL,
  `teacher_phoneNumber` varchar(99) NOT NULL,
  `is_header` varchar(99) NOT NULL,
  `teacher_pw` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_phoneNumber`, `is_header`, `teacher_pw`) VALUES
('TC01', 'Kiều Tuấn Dũng', 'ktz@e.tlu.edu.vn', '012345678', '1', 'ktz');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher_class_assignment`
--

DROP TABLE IF EXISTS `teacher_class_assignment`;
CREATE TABLE `teacher_class_assignment` (
  `teacher_id` varchar(99) NOT NULL,
  `class_id` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `teacher_class_assignment`
--

INSERT INTO `teacher_class_assignment` (`teacher_id`, `class_id`) VALUES
('TC01', 'CSE485_TH2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `training_department`
--

DROP TABLE IF EXISTS `training_department`;
CREATE TABLE `training_department` (
  `department _id` varchar(99) NOT NULL,
  `department _name` varchar(99) NOT NULL,
  `department_location` varchar(99) NOT NULL,
  `department _pw` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `training_department`
--

INSERT INTO `training_department` (`department _id`, `department _name`, `department_location`, `department _pw`) VALUES
('TP01', 'Nguyễn Thị H', 'Hà Nội', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance _id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Chỉ mục cho bảng `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- Chỉ mục cho bảng `student_class_registration`
--
ALTER TABLE `student_class_registration`
  ADD KEY `class_id` (`class_id`),
  ADD KEY `std_id` (`std_id`);

--
-- Chỉ mục cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Chỉ mục cho bảng `teacher_class_assignment`
--
ALTER TABLE `teacher_class_assignment`
  ADD KEY `class_id` (`class_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Chỉ mục cho bảng `training_department`
--
ALTER TABLE `training_department`
  ADD PRIMARY KEY (`department _id`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`),
  ADD CONSTRAINT `attendance_ibfk_3` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);

--
-- Các ràng buộc cho bảng `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Các ràng buộc cho bảng `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `training_department` (`department _id`);

--
-- Các ràng buộc cho bảng `student_class_registration`
--
ALTER TABLE `student_class_registration`
  ADD CONSTRAINT `student_class_registration_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
  ADD CONSTRAINT `student_class_registration_ibfk_2` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`);

--
-- Các ràng buộc cho bảng `teacher_class_assignment`
--
ALTER TABLE `teacher_class_assignment`
  ADD CONSTRAINT `teacher_class_assignment_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
  ADD CONSTRAINT `teacher_class_assignment_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
