<?php

    require_once "models/Cohort.php";
    require_once "models/Student.php";
    require_once "models/Course.php";
   
    $course1 = new Course("Programming", 80);
    $course2 = new Course("Programming",90);
    $course3 = new Course("Database",65);

    $mary = new Student("Mary",[$course1]);
    $john = new Student("John",[$course2,$course3]);
    
    $cohort_2021 =  new Cohort("2021", [$mary,$john]);    

    //var_dump($cohort_2021->getStudents());
    

    #display all
    #complete the codes
    echo "<table border=1>";
    echo "<tr><th>Name</th><th>Subject</th></tr>";
    foreach (   as $stud ){
        echo "<tr>
                <td>" .    . "</td>";
        $str='';
        foreach (   as $s){
            $str .=   . "  " .    .  "<br>";
        }
        echo "<td> $str </td>";
        echo "</tr>";
    }
    echo "</table>";

?>