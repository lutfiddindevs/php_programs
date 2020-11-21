<?php 

/*1. Write a PHP script to: 
a) transform a string all uppercase letters.
b) transform a string all lowercase letters.
c) make a string's first character uppercase.
d) make a string's first character of all the words uppercase. */


echo "Task 1" . "<br>";
echo "<br>";
$some_text = "i love learning php";
echo strtoupper($some_text) . "<br>";

echo strtolower($some_text) . "<br>";

echo ucfirst($some_text) . "<br>";

echo ucwords($some_text) . "<br>";
echo "<br>";

// *2.Write a PHP script to split the following string.

echo "Task 2" . "<br>";
echo "<br>";
$string = '082307';
echo substr(chunk_split($string, 2, ":"), 0, -1) . "<br>";
echo "<br>";

// *3.Write a PHP script to check whether a string contains a specific string? 

echo "Task 3" . "<br>";
echo "<br>";
$text = "The quick brown fox jumps over the lazy dog.";
if (strpos($text, "jumps") !== false) {
    echo "The word 'jumps' is available" . "<br>";
} else {
    echo "There is no such kind of word";
}
echo "<br>";

//*4 Write a PHP script to convert the value of a PHP variable to string. 

echo "Task 4" . "<br>";
echo "<br>";
$s = "PHP is fun" . "<br>";
echo strval($s);
echo "<br>";

//*5.Write a PHP script to extract the file name from the following string. 

echo "Task 5" . "<br>";
echo "<br>";
$path = "www.example.com/public_html/index.php";
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php";
echo "<br>";
echo "<br>";

//*6. Write a PHP script to extract the user name from the following email ID. 

echo "Task 6" . "<br>";
echo "<br>";
$email = 'rayy@example.com';
echo substr($email, 0, 4) . "<br>";
echo "<br>";

//*7. Write a PHP script to get the last three characters of a string. 

echo "Task 7" . "<br>";
echo "<br>";
$str = 'rayy@example.com';
echo substr($str, 12 ) . "<br>";
echo "<br>";

//*8.Write a PHP script to format values in currency style. 

echo "Task 8 Sorry, I could not do that program on myself thus i used the internet" . "<br>";
echo "<br>";
$value1 = 65.45;
$value2 = 104.35;
echo sprintf("%1.2f", $value1+$value2)."\n";
echo "<br>";
echo "<br>";

//*9. Write a PHP script to generate simple random password [do not use rand() function] from a given string. 

echo "Task 9" . "<br>";
echo "<br>";
$psw = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
echo substr($psw, 5, 8) . "<br>";
echo "<br>";

//*10.Write a PHP script to replace the first 'the' of the following string with 'That'. 

echo "Task 10" . "<br>";
echo "<br>";
$tx = "The quick brown fox jumps over the lazy dog.";
echo str_replace("The", "That", $tx);
echo "<br>";
 