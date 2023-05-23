<?php
class Course
{
    private $teacherID;
    private $teacherName;
    private $teacherSpecializtion;

    public function __construct($teacherID, $teacherName, $teacherSpecializtion)
    {
        $this->teacherID = $teacherID;
        $this->teacherName = $teacherName;
        $this->teacherSpecializtion = $teacherSpecializtion;
    }
    public function getTeacherID()
    {
        return $this->teacherID;
    }

    public function setTeacherID($teacherID)
    {
        $this->teacherID = $teacherID;
    }
    public function getTeacherName()
    {
        return $this->teacherName;
    }

    public function setTeacherName($teacherName)
    {
        $this->teacherName = $teacherName;
    }
    public function getTeacherSpecializtionm()
    {
        return $this->teacherSpecializtion;
    }

    public function setTeacherSpecializtion($teacherSpecializtion)
    {
        $this->teacherSpecializtion = $teacherSpecializtion;
    }
}
