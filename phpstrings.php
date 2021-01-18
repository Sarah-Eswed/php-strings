<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<!--1 A transform a string all uppercase letters -->
<?php
$str = "we are learning php this is our first task";
$str = strtoupper($str);
echo $str; 
?>
<br />
<br />
<!--1 B transform a string all lowercase letters.  -->
<?php
$str = "THIS TASK CONTAIN 22 QUESTIONS";
$str = strtolower($str);
echo $str; 
?>
<br />
<br />
<!--1 C make a string's first character uppercase.  -->
<?php
$str = 'sarah al eswed';
$str = ucfirst($str);             
 echo $str;
?> 
<br />
<br />
<!--1 D make a string's first character of all the words uppercase. -->
<?php
$str = 'sarah al eswed';
$str = ucwords($str);             
 echo $str;
?>
<br />
<br />
<!-- 2 split the following string. Sample string : '082307' Expected Output : 08:23:07 -->
<?php
$str1= '082307'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1);
?>
<br />
<br />
<!--3 Write a PHP script to check whether a string contains a specific string -->
<?php
$str1 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str1,'jumps') !== false) 
 {
    echo 'Found the word you have been looking for.';
 }
else
 {
    echo 'Didn\'t find the word you have been looking for';
 }
?>
<br />
<br />
<!--4  Write a PHP script to extract the file name from the following string. -->
<?php
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name;
?>
<br />
<br />
<!--5 Write a PHP script to extract the user name from the following email ID.  -->
<?php
$mailid  = 'Orange@example.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
?>
<br />
<br />
<!--6 Write a PHP script to get the last three characters of a string. -->
<?php
$str1 = 'Orange@example.com';
echo substr($str1, -3)."\n";
?>
<br />
<br />
<!--7 Write a PHP script to generate simple random passwords -->
<?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(8)."\n";
?>
<br />
<br />
<!-- 8 Write a PHP script to replace the first 'the' of the following string with 'That' -->
<?php
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."\n"; 
?>
<br />
<br />
<!--9 Write a PHP script to find the first character that is different between two strings. -->
<?php
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>
<br />
<br />
<!-- 10 Write a PHP script to put a string in an array.  -->
<?php
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
?>
<br />
<br />
<!-- 11 Write a PHP script to print the next character of a specific character. -->
<?php
// 'a' Expected Output : 'b'
$cha = 'a';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
?>
<br />
<?php
//  'z' Expected Output : 'a'
$cha = 'z';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
?>
<br />
<br />
<!-- 12 Write a PHP script to remove a part of a string from the beginning. -->
<?php
$sub_string = 'orange@';
$str = 'orange@example.com';
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
echo $str."\n";
?>
<br />
<br />
<!--13 Write a PHP script to insert a string at the specified position in a given string.  -->
<?php
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
?>
<br />
<br />
<!--14 Write a PHP script to get the first word of a sentence. -->
<?php
$s = 'The quick brown fox';
$arr1 = explode(' ',trim($s));
echo $arr1[0]."\n";
?>
<br />
<br />
<!--15 Write a PHP script to remove all leading zeroes from a string -->
<?php
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
?>
<br />
<br />
<!-- 16 Write a PHP script to remove part of a string. -->
<?php
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";
?>
<br />
<br />
<!--17  Write a PHP script to remove trailing slash from a string. -->
<?php
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";
?>
<br />
<br />
<!--18 Write a PHP script to get the characters after the last '/' in an url.  -->
<?php
$my_url = 'http://www.example.com/5478631';
echo substr($my_url, strrpos($my_url, '/' )+1)."\n";
?>
<br />
<br />
<!--19 Write a PHP script to replace Special characters from the following string. -->
<?php
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
?>
<br />
<br />
<!--20 Write a PHP script to select first 5 words from the following string.  -->
<?php
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
?>
<br />
<br />
<!--21 Write a PHP script to remove comma(s) from the following numeric string. -->
<?php
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
?>
<br />
<br />
<!--22 Write a PHP script to print letters from 'a' to 'z'. -->
<?php
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"
?>
<br />
<br />
<!-------------------------------------------------------------------------------------------------->
</body>
</html>