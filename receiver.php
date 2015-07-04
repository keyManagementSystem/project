<?php
$var1 = $_GET['apples'];
$var2 = $_GET['oranges'];

$fileContent = "You have ".$var1." apples, and ".$var2." oranges\n";

$fileStatus = file_put_contents('myFile.txt',$fileContent,FILE_APPEND);
if($fileStatus != false)
{
    echo "SUCCESS: data written to file";
}
else
{
    echo "FAIL: could not write to file";
}
?>