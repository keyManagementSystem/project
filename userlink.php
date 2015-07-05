<html>
<body>

<?php
include 'connection.php';
$query = "SELECT * FROM keylist ";
$result = mysql_query($query);
echo "<table><tr><th> KeyId </th><th> Room No </th><th> Status </th><th>";
while($list =  mysql_fetch_array($result)){
    echo "<tr><td>" .$list['KeyId']."</td><td>".$list['Room No']."</td><td>"  .$list['Status']. "</td></tr>";
}

echo "</table>";
echo "<button> Remove Key</button><button>Add New Key</button><button>Edit Key</button>";
?>
</body>
</html>