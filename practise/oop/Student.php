<?php 

class Teacher{
    public $teacher_name;
    public $password = "1234";

    public function __construct($teacher_name)
    {
        $this->teacher_name = $teacher_name;
    }

    public function printTeacher(){
        echo $this->password;
    }

    public function teacherEmail(){
        echo "Hello this is test email";
    }
}


class Student extends Teacher{
    public $name;
    public $age;
    public $id;

    public function __construct($name,$age,$id)
    {
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
    }

    public function learn(){
        echo $this->password . "," .$this->id . " attend class 9";
    }
}

// $teacher = new Teacher('Mahin');
// echo $teacher->password();


$stu = new Student('Mahin',26,1234);
echo $stu->learn();