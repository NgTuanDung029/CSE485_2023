<?
class Teacher
{
    private $courseID;
    private $courseName;
    private $courseTerm;

    public function __construct($courseID, $courseName, $courseTerm)
    {
        $this->courseID = $courseID;
        $this->courseName = $courseName;
        $this->courseTerm = $courseTerm;
    }
    public function getCourseID()
    {
        return $this->courseID;
    }

    public function setCourseID($courseID)
    {
        $this->courseID = $courseID;
    }
    public function getCourseName()
    {
        return $this->courseName;
    }

    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;
    }
    public function getCourseTerm()
    {
        return $this->courseTerm;
    }

    public function setName($courseTerm)
    {
        $this->courseTerm = $courseTerm;
    }
}
