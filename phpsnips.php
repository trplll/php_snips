<?php

#Comments
#--------------------------------------------------------------------------
// This is a single-line comment
# This is also a single-line comment
/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;


/*echo has no return value while print has a return value of 1
so it can be used in expressions. echo can take multiple 
parameters (although such usage is rare) while print can 
take one argument. echo is marginally faster than print.
*/


#For, For Each, While Loops
#--------------------------------------------------------------------------
 
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
} 
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
    echo "$value <br>";
}
$x = 1; 
while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 

#PHP Constant
#--------------------------------------------------------------------------
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

#string
#--------------------------------------------------------------------------
echo strlen("Hello world!"); // outputs 12
echo str_word_count("Hello world!"); // outputs 2
echo strrev("Hello world!"); // outputs !dlrow olleH
echo strpos("Hello world!", "world"); // outputs 6
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

?>
