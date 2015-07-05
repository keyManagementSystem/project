<html>
<body>

<?php
include 'connection.php';
$query = "SELECT * FROM userdetail";
$result = mysql_query($query);
echo "<table><tr><th> UserId </th><th> UserName </th><th> Pin </th><th> AccessRooms</th></tr>";
while($User =  mysql_fetch_array($result)){
    echo "<tr><td>" .$User['UserId']."</td><td>".$User['UserName']."</td><td>" .$User['Pin']. "</td><td>" .$User['AccessRooms']. "</td></tr>";
}

echo "</table>";
echo "<button> Remove User</button><button>Add New User</button><button>Edit User</button>";
?>
</body>
</html>