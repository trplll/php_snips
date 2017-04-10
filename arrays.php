<?php

#Create an indexed array named $cars, assign three elements to it, and then print a text containing the array values:
#---------------------------------------------------------------------------------------------------------------------
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

#Create an associative array named $age:
#---------------------------------------------------------------------------------------------------------------------

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";


#Loop through and print all the values of an indexed array:
#---------------------------------------------------------------------------------------------------------------------
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);

for($x=0;$x<$arrlength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }
  
  
#Loop through and print all the values of an associative array:  
#---------------------------------------------------------------------------------------------------------------------
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
  {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
  }

#Create a multidimensional array:
#---------------------------------------------------------------------------------------------------------------------
// A two-dimensional array:
$cars=array
  (
  array("Volvo",100,96),
  array("BMW",60,59),
  array("Toyota",110,100)
  );

#Change all keys in an array to uppercase:
#---------------------------------------------------------------------------------------------------------------------
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));

#Change all keys in an array to lowercase:
#---------------------------------------------------------------------------------------------------------------------
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_LOWER));

#If two or more keys will be equal after running array_change_key_case() (e.g. "b" and "B"), the latest array will override the other:
#---------------------------------------------------------------------------------------------------------------------
$pets=array("a"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");
print_r(array_change_key_case($pets,CASE_UPPER));

