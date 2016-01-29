<?php

if(isset($_GET['turn']) && function_exists($_GET['turn']))
call_user_func($_GET['turn']);
else
echo "Function not found or wrong input";

function on()
{
$my_file = 'open.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file
}

function off()
{
$my_file = 'open.txt';
unlink($my_file);
}

?>
