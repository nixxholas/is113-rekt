<!--
    Name: Nicholas Chen Han Wei
    Email: hwchen.2020
-->
<?php

require_once 'common.php';

function display_timetable($students)
{
    $day_names = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'];
    $schedule = [9 => [[], [], [], [], []], 10 => [[], [], [], [], []], 11 => [[], [], [], [], []],
        12 => [[], [], [], [], []], 13 => [[], [], [], [], []], 14 => [[], [], [], [], []], 15 => [[], [], [], [], []],
        16 => [[], [], [], [], []]];

    // For every time with the work days
    foreach ($schedule as $time => $days) {
        // For every day in the specific time
        for ($i = 0; $i < sizeof($days); $i++) {
            $cur_day = $day_names[$i];
            // Check if the student is busy in this specific time
            foreach ($students as $student) {
                $timetable = $student->getTimetable();
                foreach ($timetable as $appt) {
                    // If the appointment is the current day of the week
                    // And if the appt start time is == current time or
                    // if the start time is less the the current time but end time is less than or equal to the
                    // current time
                    if ($appt->getDayOfTheWeek() == $cur_day && ($appt->getStartTime() == $time
                            || ($appt->getStartTime() < $time
                                && $time <= $appt->getStartTime() + $appt->getDuration()))) {
                        array_push($schedule[$time][$i], $student->getName());
                    }
                }
            }
        }
    }

    $day_rows = [8, 8, 8, 8, 8];
    echo "<table border='1'>";
    echo "<thead><th></th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th></thead>";
    // Loop every time slot
    foreach ($schedule as $time => $days) {
        echo "<tr>";
        $end_time = $time + 1;
        echo "<th>$time-$end_time</th>";
        // Loop every day,
        // 0 = Mon.. so on and so forth
        for ($i = 0; $i < sizeof($days); $i++) {
            $thickness = 1;
            $day = $days[$i];

            // If the current time is greater than the rows filled for the day
            if (sizeof($day) > 0 && $time > $day_rows[$i]) {
                // If someone is unavailable
                // Keep looping next timeslot to see if there's more unavailability.
                $new_time = $time + 1;
                while (array_key_exists($new_time, $schedule) && sizeof($schedule[$new_time][$i]) > 0) {
                    $thickness += 1;
                    foreach ($schedule[$new_time][$i] as $cmi) {
                        if (!in_array($cmi, $day)) {
                            array_push($unavailable, $cmi);
                        }
                    }
                    $new_time = $time + 1;
                }
            } else {
                $new_time = $time + 1;
                while (array_key_exists($new_time, $schedule) && sizeof($schedule[$new_time][$i]) == 0) {
                    $thickness += 1;
                }
            }

            echo "<td rowspan='$thickness'>";

            if ($day != null && sizeof($day) > 0)
                foreach ($day as $person) {
                    echo $person;
                }

            echo "</td>";
            $day_rows[$i] += $thickness;
        }
        echo "</tr>";
    }
    echo "<table>";
}

### START OF DO NOT MODIFY ###

function display($students)
{
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

if (count($_GET) != 0) {
    $sids = $_GET['sids'];
    $students = [];
    $studentDAO = new StudentDAO();
    foreach ($sids as $sid) {
        $student = $studentDAO->getStudent($sid);
        $students[] = $student;
    }
    display($students);
}

### END OF DO NOT MODIFY ###

?>