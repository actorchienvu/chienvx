<?php

$myfile = fopen('file1.txt','r');
$check1 = fread($myfile, filesize('file1.txt'));
$myfile = fopen('file2.txt','r');
$check2 = fread($myfile, filesize('file2.txt'));

function checkValidString($string){
    if ( is_int(strpos($string,'book')) == false && is_int(strpos($string,'restaurant')) == true )
    {
        return TRUE;
    }
    elseif(is_int(strpos($string,'book')) == true && is_int(strpos($string,'restaurant')) == false)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
    }

$result1 = substr_count($check1, ".");
$result2 = substr_count($check2, ".");

echo checkValidString($check1) ? "Chuỗi hợp lệ. Chuỗi gồm $result1 câu<br />" : "Chuỗi không hợp lệ<br />";
echo checkValidString($check2) ? "Chuỗi hợp lệ. Chuỗi gồm $result2 câu<br />" : "Chuỗi không hợp lệ<br />";
?>