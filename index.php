<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       include('Student.php');// call the Student class

        $students = array();// declare an array of student object 

        
        //create the instance of the first student and assign values to its viarables
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        //create the instance of the second student and assign values to its viarables
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        //create the instance of the third student and assign values to its viarables
        $third = new Student();
        $third->surname = "Guo";
        $third->first_name ="Xin";
        $third->add_email('home','nelsonkwok15@gmail.com');
        $third->add_email('work','a_einstein@bcit.ca');
        $third->add_grade(90);
        $third->add_grade(85);
        $third->add_grade(80);
        $students['a095'] = $third;
        
        
        //sort the students by grade average in decending order 
        ksort($students);

        
        //print out the info of all students in the array
        foreach ($students as $student) {
            echo $student->toString();
        }
        
?>
    </body>
</html>
