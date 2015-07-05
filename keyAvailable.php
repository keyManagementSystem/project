<html>
<body>

<?php
include 'connection.php';
$query = "SELECT * FROM keylist WHERE STATUS ='Available' ";
$result = mysql_query($query);
echo "<table><tr><th> KeyId </th><th> Room No </th><th>";
while($avail =  mysql_fetch_array($result)){
    echo "<tr><td>" .$avail['KeyId']."</td><td>".$avail['Room No']."</td></tr>";
}

echo "</table>";
?>
</body>
</html>