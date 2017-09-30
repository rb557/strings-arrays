<?php

$obj = new main();
$text = "This is my string function";
$abc1 ="Welcome to php";
$abc2 ="Welcome to php,world";
$abc3 =",";
$string="this is PHP";
$intro= array('firstname','lastname','phone');
$text123 = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
$jn = array('hello beautiful');
$arr = array('Hello','World!','Beautiful','Day!');
$str123="Hello Beautiful";
$foo[bar] = 'enemy';
$obj->printthis($text);

$input  = array("php", 4.0, array("green", "red"));
$arr123 = array(5 => 1, 12 => 2);
$foo[bar] = 'enemy';


$array = array(1,2,3,4,5,6,7,5,2,4);
$obj->printArray($array);



class main {
        public function __construct(){
	echo '<h1>Hello I\'m going to print string functions and array functions <h1>';
	        echo '<hr>';
		        }

	 public function printthis($text){
	 echo '<h1>Print funcion demo </h1>';
	 print($text);
	 echo '<hr>';
	 echo'<h1>CHR-Return a specific character</h1>';
	 echo chr(-159),chr(844);
	 echo '<hr>';
	 echo'<h1>Explode-split a string</h1>';
	 var_dump( explode(',',$abc1));
	 var_dump( explode(',',$abc2));
	 var_dump( explode(',',$abc3));
	 echo '<hr>';
	 echo'<h1>crc32() Function </h1>';
	 $str = crc32("Hello World!");
	 printf("%u\n",$str);
	 echo '<hr>';
	 echo '<h1>implode — Join array elements with a string</h1>';
	 echo implode(",", $intro);
	 var_dump(implode('hello', array()));
	 echo '<hr>';
	 echo '<h1>ltrim — Strip whitespace (or other characters) from the beginning of a string</h1>';
	 var_dump($text123, $binary, $hello);
	 $trimmed = ltrim($text123);
	 var_dump($trimmed);
	 $trimmed = ltrim($text123, "\t.");
	 var_dump($trimmed);
	 $trimmed = ltrim($hello,"Hdle");
	 var_dump($trimmed);
	 $clean	 = ltrim($binary,"\x00..\x1F");
	 var_dump($clean);
	echo '<hr>';
        echo'<h1>This is the 6th string lcfirst() </h1>';
	echo lcfirst("Hello world!");
	echo "<br>";
	echo chop($jn,"all");
	echo '<hr>';
	echo '<h1>The PHP strlen() function returns the length of a string</h1>';
	echo "the length is ". strlen("Welcome to this section");
	echo '<hr>';
	echo '<h1>This is the 8th string chunk_split</h1>';
	echo "this will split the string " . chunk_split("hello chunk",1,".");
	echo '<hr>';
	echo '<h1>This is the 9th string ucwords</h1>';
	echo ucwords("this will convert the first character of each word to uppercase");
	echo '<hr>';
	echo '<h1>This is the 10th string strrev</h1>';
	echo "Lets reverse the string Hello Guys " . strrev("Hello Guys");
	echo '<hr>';
	}
	public function printArray($array){
	echo '<h3>array print funtion</h3>';
	print_r($array);
	echo '<hr>';
	echo '<h3>This is the second array array_chunk()<h3>';
	print_r(array_chunk($array,2));
	echo '<hr>';
	echo '<h3>array_count_function funtion</h3>';
	print_r(array_count_values($array));
	echo '<hr>';
	echo '<h3>Array_pop function deletes the last element of the array</h3>';
	array_pop($array);
	print_r($array);
	echo '<hr>';
	echo '<h3>This is the 5th
	array_sum<h3>';
	echo array_sum($array);
	echo '<hr>';
	echo '<h3>This is the 6th array count array</h3>';
	echo "The count of the  array is "  .count($array);
	echo '<hr>';
	echo '<h3>This is  the  7th array array_pop<h3>';														
	echo array_pop($array);
	echo'<hr>';
	echo '<h3>This is the 8th array flip function</h3>';
	print_r(array_flip($array));
	echo'<hr>';
	echo'<h3>This is the 9th array_chunk function</h3>';
	print_r(array_chunk($array,"2"));
	echo'<hr>';
	echo'<h3>This is the 10th array array_push</h3>';
	array_push($array,"eight","nine"); 
	print_r($array);
	echo '<hr>';																				}
        public function __destruct(){
         echo'<h1>The strings and arrays are done</h1>';
	 }
	}
?>

