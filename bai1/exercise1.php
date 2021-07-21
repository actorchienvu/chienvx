<?php


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
if (isset($_POST["string"]))
{
echo checkValidString($_POST["string"]) ? 'TRUE<br />' : 'FALSE<br />';

die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>checkValidString</title>
</head>
<body>
    <form action="index.php" method="POST">
        String: <input type="text" name="string"/>
        <input type="Submit" value="Submit"/>

    </form>
</body>
</html>