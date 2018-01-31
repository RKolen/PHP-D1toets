
<?PHP

echo "<p>exercise 1</p>";
 
	
 	for​($i=​0​; $i<​100​; $i++) {
 		echo​ ​"<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>"​; 
 	} 

/*echo "<p>exercise 2</p>";
 	$a = 1000;
 	$b = 1200;
 	$c = 1400;
 	echo "<p>$a</p>";
 	echo "<p>$b</p>";
 	echo "<p>$c</p>";
 	function sum(){
 		global $a, $b, $c;
 		$c = $a+$b+$c;
 	}
 	sum();
 	echo "<p>sum is $c</p>";

echo "<p>exercise 3</p>";

echo"<p>exercise 3 has a number of errors. first the variables are only defined in the global scope not inside the function. The function is not called after declaring it. And the variable changed is not given. And the echo should be outside the function. See code below for solution.</p>";

$number1 = 100;
$number2 = 500;

function addNumbers(){
 		global $number1, $number2;
 		$number2 = $number1+$number2;
 	}
 	addNumbers();
 	echo "<p>sum is $number2</p>";
echo "<p>exercise 4</p>";

$testString = "Hello World";
// write your code here
$teststring = "Hello World";
//both $testString and $teststring result in the same code
echo "<p>$testString</p>";
echo "<p>$teststring</p>";

echo "<p>exercise 5</p>";

$name = "George";
$age = 50;
$male = true​;
$list = [1,2,5,8,9];
//write your code here
gettype();
//according to php.net i should get the datatypes if i then echo the variable, which only occurs for the last one for some reason.

echo"<p>Value is $name</p>";
echo"<p>Value is $age</p>";
echo"<p>Value is $male</p>";
echo"<p>Value is $list</p>";

echo "<p>exercise 6</p>";

$x = 5;
$y = 10;
$z;

function sum(){
 		global $x, $y, $z;
 		$z = $x+$y;
 	}
 	sum();
 	echo "<p>sum is $y</p>";
function sub(){
 		global $x, $y, $z;
 		$z= $x-$y;
 	}
 	sub();
 	echo "<p>substraction is $z</p>";

 function div(){
 		global $x, $y, $z;
 		$z= $x/$y;
 	}
 	div();
 	echo "<p>division is $z</p>";

 function mult(){
 		global $x, $y, $z;
 		$z= $x*$y;
 	}
 	mult();
 	echo "<p>multiplication is $z</p>";

 function exponent(){
 		global $x, $y, $z;
 		$z= $x**$y;
 	}
 	exponent();
 	echo "<p>exponentiation is $z</p>";
echo "<p>exercise 7</p>";


var $line = the quick brown fox jumps over the lazy dog.

function that($line) {
	if ($verb == "the") {
		for($i = 1; $i <= 1; $i++) {
 echo "That";
 } 
	}
 that();
 echo "$line";

echo "<p>exercise 8</p>";

$temperature = 10;
// write your code here
function temperature(){
	global $temperature;
 if ($temperature <= 50) {
 echo "temperature is low";
 } else
 echo "temperature is ok";
}
temperature();

echo "<p>exercise 9</p>";

$cities = array("New York City", "Seoul", "Tokyo", "Mexico City", "Shanghai", "Lagos", "Cairo", "Buenos Aires", "London", "Mumbai");
sort($cities);
for($i=0; $i<count($cities); $i++) {
 echo $cities[$i] . "<br />";
 }
echo "<br/>";
array_push($cities,"Calcutta", "Los Angeles", "Osaka", "Beijing");

sort($cities);
for($i=0; $i<count($cities); $i++) {
 echo $cities[$i] . "<br />";
 }
echo "<p>exercise 10</p>";
$array = array();
$array[] = array(1, 2, 3, 4, 5);
$array[] = array(2, 4, 6, 8, 10);
$array[] = array(3, 6, 9, 12, 15);
$array[] = array(4, 8, 12, 16, 20);
$array[] = array(5, 10, 15, 20, 25);*/

/*echo "<p>exercise 11</p>";
<html>
<body>
<form action="calculateArea.php" method="post">
width: <input type="text" name="width"><br>
height: <input type="text" name="height"><br>
<input type="submit">
</form>
</body>
</html>

/*calculateArea.php
<?php
function calculateArea(){
 $width = $(".width").val();
 $height = $(".width").val();
 $area
 $area = $width*$height;
 echo $area
}
calculateArea();
?>*/



 ?>
