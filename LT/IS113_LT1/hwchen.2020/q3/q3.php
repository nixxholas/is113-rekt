<!--
    Name: Nicholas Chen Han Wei
    Email: hwchen.2020@sis.smu.edu.sg
-->
<!DOCTYPE html>
<html>
<head>
    <title>Q3</title>
</head>
<body>

<?php 
    // test data to test generatePairs() and sortPairs_addGroup()
    $groups = [
        "g1" => ['w1', 'm1', 'm2'],
        "g2" => ['w2', 'w3', 'm3'],
        "g3" => ['w4'],
    ];  

    $ratings = [
        'w1' => 9,
        'w2' => 6.5,
        'w3' => 7.5,
        'w4' => 10,
        'm1' => 9.5,
        'm2' => 9,
        'm3' => 8.5
    ];
?>

<?php
    // DO NOT MODIFY FOLLOWING CODE 
    $pairs = generatePairs($groups);
   
    $sortedPairs = sortPairs_addGroup($pairs, $groups, $ratings);

    showPairs($sortedPairs, $groups, $ratings);
    // END 
?>
    
</body>
</html>

<?php

function generatePairs($groups) {
    $pairs = [];

    // For each group
    foreach ($groups as $group => $members) {
        // For each male member in the group
        foreach ($members as $member) {
            if (str_split($member)[0] == 'm') {
                // for each alternate group
                foreach ($groups as $altGroup => $altMembers) {
                    if ($group != $altGroup) {
                        // for each alternate FEMALE  member
                        foreach ($altMembers as $altMember) {
                            if (str_split($altMember)[0] == 'w') {
                                // Create pair
                                $curPair = [$member, $altMember];
                                $flippedCurPair = [$altMember, $member];

                                if (!array_search($curPair, $pairs) && !array_search($flippedCurPair, $pairs)) {
                                    array_push($pairs, $curPair);
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    return $pairs;
}

function sortPairs_addGroup($pairs, $groups, $ratings) {
    $sortedPairs = [];
    $sortedPairs_addedGroup = [];

    // Add Code Here
    foreach ($pairs as $pair) {
        array_push($sortedPairs_addedGroup, $pair);
    }

   foreach ($sortedPairs_addedGroup as $pair) {
//       $score = $ratings[$pair[0]] + $ratings[$pair[1]];
//       echo $ratings[$pair[0]] . "+" . $ratings[$pair[1]] . "=" . $score . "<br>";
//       array_push($sortedPairs_addedGroup, array($pair => $score));
       for ($i = 0; $i < count($pair); $i++) {
           foreach ($groups as $groupName => $members) {
               foreach ($members as $member) {
                   if ($member == $pair[$i]) {
                       $pair[$i] += $groupName;
                       break;
                   }
               }
           }
       }
   }


    return $sortedPairs_addedGroup;
}


function showPairs($pairs, $groups, $ratings) {
    echo "<h3>Sorted Celebrity Pairs According to Their Combined Ratings</h3>";
    echo "<table border='1'><tr>";
    $count = 0;
    foreach($pairs as $pair) {
        $man = $pair[0];
        $woman = $pair[1];
        $idx1 = strpos($man,'/') + 1;
        $idx2 = strpos($woman, '/') + 1;
        $rating = $ratings[substr($man,$idx1)] + $ratings[substr($woman,$idx2)];
     
        $count++;
        echo "<td><img src='images/$man.jpg' width='100'>
            <img src='images/$woman.jpg' width='100'>
            <br/>($man, $woman) [$rating]
            </td>";

        if ($count % 4 == 0) {
            echo "</tr><tr>";
        }

    }
    echo "</tr></table>";
}

?>