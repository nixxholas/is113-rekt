<?php

    require_once 'common.php';
    
    function display_timetable($students){
        $day_names = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'];
        $schedule = [9 => [[],[],[],[],[]], 10 => [[],[],[],[],[]], 11 => [[],[],[],[],[]],
            12 => [[],[],[],[],[]], 13 => [[],[],[],[],[]], 14 => [[],[],[],[],[]], 15 => [[],[],[],[],[]],
            16 => [[],[],[],[],[]]];

        foreach ($schedule as $time => $days) {
            for ($i = 0; $i < sizeof($days); $i++) {
                $cur_day = $day_names[$i];

                foreach ($students as $student) {
                    $timetable = $student->getTimetable();
                    foreach ($timetable as $appt) {
                        if ($appt->getDayOfTheWeek() == $cur_day && ($appt->getStartTime() <= $time
                                && $time <= $appt->getStartTime() + $appt->getDuration())) {
                            array_push($schedule[$time][$i], $student->getName());
                        }
                    }
                }
            }
        }

        $day_rows = [0,0,0,0,0];
        echo "<table border='1'>";
        echo "<thead><th></th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th></thead>";
        // Loop every time slot
        foreach ($schedule as $time => $days) {
            echo "<tr>";
            $end_time = $time + 1;
            echo "<th>$time-$end_time</th>";
            // Loop every day
            for ($i = 0; $i < sizeof($days); $i++) {
                $day = $days[$i];
                $day_row = $day_rows[$i];

                if (($time - 8) > $day_row) {
                    echo var_dump($day) . "<br><br>";
                    $thickness = 1;

                    // If someone is unavailable
                    if (sizeof($day) > 0) {
                        // Keep looping next timeslot to see if there's more unavailability.
                        $new_time = $time + 1;
                        while (true) {
                            if (sizeof($schedule[$new_time][$i]) > 0) {
                                $thickness += 1;
                                foreach ($schedule[$new_time][$i] as $cmi) {
                                    if (!array_search($cmi, $day)) {
                                        array_push($unavailable, $cmi);
                                    }
                                }
                            } else {
                                break;
                            }
                        }
                    }

                    echo "<td rowspan='$thickness'>";
                    foreach ($day as $person) {
                        echo $person;
                    }
                    echo "</td>";
                    $day_row += $thickness;
                }
            }
            echo "</tr>";
        }
        echo "<table>";
    }

    ### START OF DO NOT MODIFY ###

    function display($students){
        echo 
        "   
        <!DOCTYPE html>
        <html>
            <body>
        ";

        display_timetable($students);

        echo 
        "
            </body>
        </html>
        ";
    }

    if (count($_GET) != 0){
        $sids = $_GET['sids'];
        $students = [];
        $studentDAO = new StudentDAO();
        foreach($sids as $sid){
            $student = $studentDAO->getStudent($sid);
            $students[] = $student;
        }
        display($students);
    }

    ### END OF DO NOT MODIFY ###

?>