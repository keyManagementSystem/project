<html>
<body>

<?php
include 'connection.php';
$query = "SELECT * FROM keyhistory ";
$result = mysql_query($query);
echo "<table><tr><th> KeyId </th><th> UserId </th><th> Room No </th><th> Access Time</th></tr>";
while($hist =  mysql_fetch_array($result)){
    echo "<tr><td>" .$hist['KeyId']."</td><td>".$hist['UserId']."</td><td>" .$hist['Room No']. "</td><td>" .$hist['AccessTime']. "</td></tr>";
}

echo "</table>";
?>
</body>
</html>