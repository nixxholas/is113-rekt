<!--
    Name: Nicholas Chen Han Wei
    Email: hwchen.2020
-->
<!DOCTYPE html>
<?php

    require_once 'common.php';

    function create_study_groups($students, $min_size, $max_size, $min_gpa){
        $study_groups = [];

        if (sizeof($students) < $min_size) {
            return null;
        }

//        $maxGroupCount = sizeof($students) / $min_size;
//        $minGroupCount = sizeof($students) / $max_size;

        # Add code here
        # You are free to create helper functions
        $good_students = [];
        $bad_students = [];
        foreach ($students as $student) {
            if ($student->getGPA() >= $min_gpa) {
                $good_students[] = $student;
            } else {
                $bad_students[] = $student;
            }
        }

        $group_count = 1;
        while (sizeof($good_students) > 0 || sizeof($bad_students) > 0) {
            // Create a new group
            $group = new StudyGroup("G" . $group_count, []);

            // Push 1x good student
            $group->addMember(array_pop($good_students));

            // Push Bad Students until full
            while (sizeof($group->getMembers()) < $max_size) {
                if (sizeof($bad_students) > 0) {
                    $group->addMember(array_pop($bad_students));
                } else {
                    break;
                }
            }

            // Detect the last two groups
            $remaining_students = sizeof($good_students) + sizeof($bad_students);

            if ($remaining_students > 0 && $min_size > 0 && ($remaining_students / $min_size) <= 2
                && $min_size != $max_size && $min_size == 1) {
                // Create them together instead.
                $group_count += 1;
                $secondGroup = new StudyGroup("G" . $group_count, []);

                // Push Good students until full
                while (sizeof($group->getMembers()) < $max_size) {
                    if (sizeof($good_students) > 0) {
                        if (sizeof($group->getMembers()) <= sizeof($secondGroup->getMembers()))
                            $group->addMember(array_pop($good_students));
                        else
                            $secondGroup->addMember(array_pop($good_students));
                    } else {
                        break;
                    }
                }

                // Push Bad Students until full
                while (sizeof($group->getMembers()) < $max_size) {
                    if (sizeof($bad_students) > 0) {
                        if (sizeof($group->getMembers()) <= sizeof($secondGroup->getMembers()))
                            $group->addMember(array_pop($bad_students));
                        else
                            $secondGroup->addMember(array_pop($bad_students));
                    } else {
                        break;
                    }
                }

                $study_groups[] = $secondGroup;
            } else {
                // Push Good students until full
                while (sizeof($group->getMembers()) < $max_size) {
                    if (sizeof($good_students) > 0) {
                        $group->addMember(array_pop($good_students));
                    } else {
                        break;
                    }
                }
            }

            $study_groups[] = $group;
            $group_count += 1;
        }

//        for ($i = 0; $i < sizeof($study_groups); $i++) {
//            $group = $study_groups[$i];
//            $size = sizeof($group->getMembers());
//
//            // If a group has too little members
//            if ($size < $min_size) {
//                echo $size . "<br>";
//                echo $group->getId();
//                $members_to_take = ($min_size - $size) + 1;
//                while ($members_to_take > 0) {
//                    // Take from another random
//                    for ($j = 0; $j < sizeof($study_groups); $j++) {
//                        $donor_group = $study_groups[$j];
//                        if ($i != $j && sizeof($donor_group->getMembers()) > $min_size) {
//                            $donor_group->getMembers();
//                        }
//                    }
//
//                    $members_to_take += 1;
//                }
//            }
//        }

        return $study_groups;
    }

    ### START OF DO NOT MODIFY ###

    if (count($_GET) != 0){
        $min_size = $_GET['min_size'];
        $max_size = $_GET['max_size'];
        $min_gpa = $_GET['min_gpa'];
        $studentDAO = new StudentDAO();
        $students = $studentDAO->getStudents();
        $groups = create_study_groups($students, $min_size, $max_size, $min_gpa);
        display($groups);
    }

    function display($groups){
        echo 
        "
        <!DOCTYPE html>    
        <html>
            <body>
        ";
        display_groups($groups);
        echo 
        "
            </body>
        </html>
        ";
    }

    function display_groups($groups){
        if ($groups === null){
            echo "<h3>No assignment is possible</h3>";
        }
        else{
            echo "<table border='1'>";
            $row_count = 0;
            $opened = true;

            $row1 = "";
            $row2 = "";

            foreach($groups as $group){
                $row1 .= "<th>";
                $sids = "";
                foreach($group->getMembers() as $member){
                    $sids .= "sids[]={$member->getId()}&";
                }
                $sids = substr($sids,0,strlen($sids)-1);

                $row1 .= "<a href='show_availability?$sids'>{$group->getId()}</a>";
                $row1 .= "</th>";

                $members = $group->getMembers();
                $row2 .= "<td>";
                for($i=0;$i<count($members);$i++){
                    $row2 .= "{$members[$i]->getName()}";
                    if ($i != count($members)-1) $row2 .= "<br/>";
                }
                $row2 .= "</td>";
                
                if ($row_count%5 == 4) {
                    echo "<tr>$row1</tr>";
                    echo "<tr>$row2</tr>";
                    $row1 = "";
                    $row2 = "";
                }
                $row_count++;
            }
            
            if ($row1 != "") {
                echo "<tr>$row1</tr>";
                echo "<tr>$row2</tr>";
                $row1 = "";
                $row2 = "";
            }
            echo "</table>";
        }
    }

    ### END OF DO NOT MODIFY ###
?>

