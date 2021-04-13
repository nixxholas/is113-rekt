<?php

/*
    Name:

    Email:
*/

############  DO NOT CHANGE THIS CODE ################
spl_autoload_register(
    function($class){
        require_once "classes/$class.php";
    }
);

$dao = new LectureDAO();
if (isset($_POST['operation'])){
    echo "<img src='images/sis.png'>";
    $operation = $_POST['operation'];
    if ($operation === 'Show Sample Schedule'){
        echo "  <br/>
                <h1>Sample Schedule</h1>";
        $room_allocation =  [
            "Room-1" => [new Lecture("L10",9,1), new Lecture("L9",11,3), new Lecture("L8",14,3)],
            "Room-2" => [new Lecture("L6",13,1), new Lecture("L7",9,3), new Lecture("L5",15,1)],
            "Room-3" => [new Lecture("L2",11,1),  new Lecture("L1",9,1), new Lecture("L3",13,1), new Lecture("L4",15,1)],
        ];
        $sample_schedule = new Schedule($room_allocation);
        display_schedule($sample_schedule);
    }
    elseif ($operation === 'Show Schedule for a Date'){
        $date = $_POST['date'];
        $lectures = $dao->getLectures($date);
        if($lectures == null){
            echo "  <br/>
                    <h1>No schedule for $date</h1>";
        }
        else{
            echo "  <br/>
                    <h1>Schedule for $date</h1>";
            $schedule = create_schedule($lectures);
            display_schedule($schedule);
        }
    }
}
#########################################################
    
# Part A (Display the schedule): ENTER CODE HERE == 
function display_schedule($schedule){
    $allocations = $schedule->getRoomAllocation();

    if (sizeof($allocations) > 0) {
        $rooms = [];
        echo "<table border='1'>";
        echo "<tr><th></th>";
        foreach (array_keys($allocations) as $room) {
            echo "<th>$room</th>";
            $rooms[$room] = 9;
        }

        $cur_time = 9;
        while ($cur_time < 19) {
            echo "<tr>";
            $next_time = $cur_time + 1;
            echo "<th>$cur_time-$next_time</th>";
            // Iterate all the rooms
            foreach ($rooms as $room => $last_unfilled_time) {
                if ($cur_time == $last_unfilled_time) {
                    $cur_slot = search_slot($last_unfilled_time, $allocations[$room]);

                    if ($cur_slot == null) {
                        echo "<td></td>";
                        $rooms[$room] += 1;
                    } else {
                        echo "<td rowspan='{$cur_slot->getDuration()}'>{$cur_slot->getId()}</td>";
                        $rooms[$room] += $cur_slot->getDuration();
                    }
                }
            }
            echo "</tr>";

            $cur_time += 1;
        }

        echo "</tr>";
        echo "</table>";
    }
}

function search_slot($start_time, $lectures) {
    foreach ($lectures as $lecture) {
        if ($lecture->getStartTime() == $start_time)
            return $lecture;
    }

    return null;
}
# ====

# Part B (Put lectures into a schedule): ENTER CODE HERE == 
function create_schedule($lectures){
    $room_allocation = [];
    return new Schedule($room_allocation);
}
# ====
?>