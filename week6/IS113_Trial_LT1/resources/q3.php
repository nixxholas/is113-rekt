<?php
/* 
    Name:  
    Email: 
*/

// $students is an Array of:
//    Associative Arrays, where each Associative Array contains:
//        key (name) => value (string)
//        key (courses) => value (Array of Arrays)
$students = [
    [
        "name"    => 'Jong Un Kim',
        "courses" => [
            ['IS111', 'Intro Programming', 'MON', '1000', 1],
            ['CS102', 'Discrete Mathematics', 'TUE', '0830', 2],
            ['EE200', 'Intro to Circuits', 'TUE', '1330', 1],
            ['WRIT100', 'Writing and Reasoning', 'WED', '1000', 1],
            ['LIT380', 'Intro to Korean Literature', 'FRI', '1630', 1]
        ]
    ],
    [
        "name"    => 'Donald Trump',
        "courses" => [
            ['IS112', 'Data Management', 'TUE', '0830', 2],
            ['WRIT100', 'Writing and Reasoning', 'WED', '1000', 1],
            ['OBHR101', 'Leadership Team Building', 'WED', '1200', 2],
            ['IS113', 'Web Application Development', 'THU', '1500', 2],
            ['STAT202', 'Bayesian Logics', 'FRI', '1000', 1]
        ]
    ],
    [
        "name"    => 'Hugo Chavez',
        "courses" => [
            ['IS111', 'Intro Programming', 'MON', '1000', 1],
            ['IS112', 'Data Management', 'TUE', '0830', 2],            
            ['EE200', 'Intro to Circuits', 'TUE', '1330', 1],
            ['OBHR101', 'Leadership Team Building', 'WED', '1200', 2],
            ['STAT202', 'Bayesian Logics', 'FRI', '1500', 1]
        ]
    ]
];

// INPUT  : $students Array
// OUTPUT : Return an Array of student names (String)
function getStudentNames($students) {
    $arr = [];
    // Part A
    // YOUR CODE GOES HERE
    foreach ($students as $student_arr) {
        if (isset($student_arr["name"]))
            array_push($arr, $student_arr["name"]);
    }

    return $arr;
}

function getCourses($student_name, $students) {
    foreach ($students as $student_arr) {
        if (isset($student_arr["name"]) && $student_name === $student_arr["name"])
            return $student_arr["courses"];
    }

    return null;
}

function getArrayOfClassesPerDay($courses) {
    $day_arr = ["MON" => [],"TUE" => [],"WED" => [],"THU" => [],"FRI" => []];

    foreach ($courses as $course) {
        // Day is at index 2
        if (!array_key_exists($course[2], $day_arr)) {
            array_push($day_arr, array($course[2] => [$course]));
        } else {
            array_push($day_arr[$course[2]], $course);
        }
    }

    return $day_arr;
}

?>
<html>
<body>
    <form action='q3.php' method='POST'>
        Name:
        <select name='student_name'>
            <?php
                // Part A
                // YOUR CODE GOES HERE
                $student_names = getStudentNames($students); // DO NOT MODIFY THIS LINE
                // YOUR CODE CONTINUES HERE
                foreach ($student_names as $student_name) {
                    echo "<option value='$student_name'>$student_name</option>";
                }
            ?>
        </select>
        <input type='submit' name='send' value='Show Timetable' />
    </form>
    <?php
    // We should have 21 columns
    if (isset($_POST["send"]) && isset($_POST["student_name"])) {
        $student_name = $_POST["student_name"];

        echo "<table border='1'>";

        // Define the head first
        echo "<thead>";
        echo "<td colspan='1'><td>";
        echo "<td colspan='3'>08:30am - 10:00am<td>";
        echo "<td colspan='3'>10:00am - 11:30am<td>";
        echo "<td colspan='3'>12:00nn - 1:30pm<td>";
        echo "<td colspan='3'>1:30pm - 3:00pm<td>";
        echo "<td colspan='3'>3:00pm - 4:30pm<td>";
        echo "<td colspan='3'>4:30pm - 6:00pm<td>";
        echo "</thead>";

        // Settle the days first
        $classPerDay = getArrayOfClassesPerDay(getCourses($student_name, $students));

        // Then the data for all weekdays
        foreach ($classPerDay as $day => $classes) {
            echo "<tr>";
            echo "<td colspan='1'>$day</td>";
            echo "<td colspan='3' style='text-align: center'></td>";
            echo "<td colspan='3' style='text-align: center'></td>";
            echo "<td colspan='3' style='text-align: center'></td>";
            echo "<td colspan='3' style='text-align: center'></td>";
            echo "<td colspan='3' style='text-align: center'></td>";
            echo "<td colspan='3' style='text-align: center'></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>