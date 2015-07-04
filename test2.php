<?php
echo 'Current PHP version: ' . phpversion();
include 'connection.php';
$query= 'select * from persons';
$results= mysql_query($query);

?>
<html>

</html>
