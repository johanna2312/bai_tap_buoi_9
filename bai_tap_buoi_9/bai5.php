<?php
class Student {
    private $id;
    private $fullName;

    public function __construct($id, $fullName) {
        $this->id = $id;
        $this->fullName = $fullName;
    }
}

class StudentList {
    private $students;

    public function __construct() {
        $this->students = [];
    }

    public function addStudent($student) {
        $this->students[] = $student;
    }

    public function displayStudents() {
        foreach ($this->students as $student) {
            echo "ID: " . $student->id . ", Name: " . $student->fullName . "\n";
        }
    }
}
?>