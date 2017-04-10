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

#Split an array into chunks of two:
#---------------------------------------------------------------------------------------------------------------------
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));

#Split an array into chunks of two and preserve the original keys:
#---------------------------------------------------------------------------------------------------------------------
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
print_r(array_chunk($age,2,true));

#Get column of last names from a recordset:
#---------------------------------------------------------------------------------------------------------------------
// An array that represents a possible record set returned from a database
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'last_name');
print_r($last_names);

/* 
Output:
Array
(
  [0] => Griffin
  [1] => Smith
  [2] => Doe
)
*/
#Get column of last names from a recordset, indexed by the "id" column:
#---------------------------------------------------------------------------------------------------------------------
// An array that represents a possible record set returned from a database
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'last_name', 'id');
print_r($last_names);

/*
Output:
Array
(
  [5698] => Griffin
  [4767] => Smith
  [3809] => Doe
)

*/
#Create an array by using the elements from one "keys" array and one "values" array:
#---------------------------------------------------------------------------------------------------------------------
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);

#Count all the values of an array:
#---------------------------------------------------------------------------------------------------------------------
$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));

#Compare the values of two arrays, and return the differences:
#---------------------------------------------------------------------------------------------------------------------
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);

#Compare the values of three arrays, and return the differences:
#---------------------------------------------------------------------------------------------------------------------
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_diff($a1,$a2,$a3);
print_r($result);

#Create an array by using the elements from one "keys" array and one "values" array:
#---------------------------------------------------------------------------------------------------------------------
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);

#Count all the values of an array:
#---------------------------------------------------------------------------------------------------------------------
$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));

#Compare the values of two arrays, and return the differences:
#---------------------------------------------------------------------------------------------------------------------
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);

#Compare the values of three arrays, and return the differences:
#---------------------------------------------------------------------------------------------------------------------
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_diff($a1,$a2,$a3);
print_r($result);

#Compare the keys of two arrays, and return the differences:
#---------------------------------------------------------------------------------------------------------------------
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);

#Compare the keys of two indexed arrays, and return the differences:
#---------------------------------------------------------------------------------------------------------------------
$a1=array("red","green","blue","yellow");
$a2=array("red","green","blue");

$result=array_diff_key($a1,$a2);
print_r($result);

#Compare the keys of three arrays, and return the differences:
#---------------------------------------------------------------------------------------------------------------------
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("c"=>"yellow","d"=>"black","e"=>"brown");
$a3=array("f"=>"green","c"=>"purple","g"=>"red");

$result=array_diff_key($a1,$a2,$a3);
print_r($result);

