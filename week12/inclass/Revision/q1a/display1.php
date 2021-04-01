<?php

    spl_autoload_register(
        function ($class){
            require_once  "model/$class.php";
        }
    );


    $dao = new TaskDAO();

    $task_arr = $dao->retrieveAll();
    //var_dump($task_arr);

    echo "<h3> MY TASKS LIST </h3>";
    echo "<ul>";
    foreach ($task_arr as $task){
        echo "<li>" . $task->getWeekDay() .  "  -  "  . 
                      $task->getTask() . "</li>";
    }
    echo "</ul>";


    // See what it returns - it is an array
    $task = $dao->retrieveTask("Tue");
    var_dump($task);
    echo "My Task for Tue is : " . $task[0]->getTask();

?>