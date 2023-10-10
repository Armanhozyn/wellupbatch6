<?php

interface Main{
    public function display();
}



class Student implements Main{
  
    public function display()
    {
        return "This is Student Model";
    }

}

class Teacher {
    public static $name = "Tawhid";
    public static function display()
    {
        return "This is Teacher Model";
    }

    

}

echo Teacher::$name; 

echo Teacher::display();

// $stu = new Student();

// echo $stu->display();



// $teach = new Teacher();

// echo $teach->display();