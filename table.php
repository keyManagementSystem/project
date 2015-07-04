
<html>
    <body>
        <?php 
        include 'connection.php';
        $query = "SELECT * FROM Persons";
        $result = mysql_query($query);
        while($Persons=  mysql_fetch_array($result)){
            echo "<h3>".$Persons['FirstName']."</h3>";
        }
        ?>
    </body>
</html>