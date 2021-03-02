<?php
/* 
    Name:  
    Email: 
*/

function generateRandomSets($quantity) {
    $num_numbers = 3; // generate 3 random integers
    $result = [];
    /*
     $result is an Array of Arrays.
     A sample $result array looks like this
     with parameter $quantity of 3 (user input):

     [
         [1, 5, 3],
         [2, 0, 9],
         [4, 8, 4]
     ]
    */
    
    // Part A
    // YOUR CODE GOES HERE
    for ($i = 0; $i < $quantity; $i++) {
        $newSet = [];
        for ($j = 0; $j < $num_numbers; $j++) {
            array_push($newSet, rand(0, 9));
        }
        array_push($result, $newSet);
    }
    
    return $result;
}

function calculate($random_sets, $lucky_number) {
    $result = [];
    $num_numbers = 3; // each set consists of 3 randomly generated integers

    /*
     $results is an Array.
     A sample $result array looks like this
     (given that $random_sets contain 4 sets of numbers)

     [
         0,
         1,
         0,
         2
     ]

     It means:
        - First number set had zero match.
        - Second number set had ONE match.
        - Third number set had zero match.
        - Fourth number set had TWO matches.

    */

    // Part B
    // YOUR CODE GOES HERE
    foreach ($random_sets as $random_set) {
        $match_count = 0;
        foreach ($random_set as $number) {
            if ($number == $lucky_number)
                $match_count += 1;
        }
        array_push($result, $match_count);
    }
    
    return $result;
}

// Form Processing
// YOUR CODE GOES HERE
$quantity = $_POST["quantity"];
$lucky_number = $_POST["lucky_number"];
$bet_amount = $_POST["bet_amount"];

// Generate # of sets (each set contains 3 numbers)
$random_sets = generateRandomSets($quantity); // DO NOT MODIFY THIS LINE

// Check if lucky number is found
$result = calculate($random_sets, $lucky_number); // DO NOT MODIFY THIS LINE

?>
<!DOCTYPE html>
<html>
<body>
<?php
    echo "<h1>Lucky Number: $lucky_number</h1>";
    echo "<h1>Bet Amount: $bet_amount</h1>"
?>
</body>
</html>
