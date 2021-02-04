<?php

   
    // YOUR CODE GOES HERE
    // to print greetings in crimson, use <h2 style='color: crimson;'>
    // to print greetings in red, use <h2 style='color:red'>
 
   
?>

<html>
<body>

    <form method="get">

        <!-- DO NOT CHANGE THE CODES -->
        Year : 
            <input type="number" name="year" /> <br/>
                
        Zodiac :
            <br/>
            <input type="radio" name="zodiac" value="Rat" /> Rat <br/>
            <input type="radio" name="zodiac" value="Ox" /> Ox <br/>
            <input type="radio" name="zodiac" value="Tiger" /> Tiger <br/>
            <input type="radio" name="zodiac" value="Rabbit" /> Rabbit <br/>   
            <input type="radio" name="zodiac" value="Dragon" /> Dragon <br/>   
            <br/>   
        
            CNY Greetings : <br>
            <input type="checkbox" name="greetings[]" value="+++ Happy New Year  +++" /> CNY Greeting 1 <br>
            <input type="checkbox" name="greetings[]" value="+++ Prospertity No. 1 +++" /> CNY Greeting 2 <br>
            <input type="checkbox" name="greetings[]" value="+++ Lucky and Wealthy +++" /> CNY Greeting 3 <br>
        
        
        <br>
        <input type="submit" value="Submit">

    </form>
</body>
</html>