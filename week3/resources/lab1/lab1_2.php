<?php
$var = 60;
# Write code here
DEFINE("EARTH_MULTIPLIER", 1);
DEFINE("MERCURY_MULTIPLIER", 0.4);
DEFINE("VENUS_MULTIPLIER", 0.9);
DEFINE("JUPITER_MULTIPLIER", 2.5);

echo "Your weight on Earth" . " is " . ($var * EARTH_MULTIPLIER) . " kg <br/>";
echo "Your weight on Mercury" . " is " . ($var * MERCURY_MULTIPLIER) . " kg <br/>";
echo "Your weight on Venus" . " is " . ($var * VENUS_MULTIPLIER) . " kg <br/>";
echo "Your weight on Jupiter" . " is " . ($var * JUPITER_MULTIPLIER) . " kg <br/>";
# End of code
?>