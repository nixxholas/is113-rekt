<?php

    require_once "models/common.php";

    $dao1 = new CourseDAO();
    $course_list = $dao1->retrieveAll('John');
    var_dump($course_list);


?>