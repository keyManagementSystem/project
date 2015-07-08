<?php define('DB_HOST', 'localhost');
define('DB_NAME', 'keymanagementsystem');
define('DB_USER','root');
define('DB_PASSWORD','amuthu');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$ID = $_POST['UserId']; $Pin = $_POST['Pin'];
function SignIn() { session_start(); //starting the session for user profile page
if(!empty($_POST['UserId'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{ $query = mysql_query("SELECT * FROM userdetail where UserId = '$_POST[UserId]' AND Pin = '$_POST[Pin]'") or die(mysql_error()); $row = mysql_fetch_array($query) or die(mysql_error());
    if(!empty($row['UserId']) AND !empty($row['Pin'])) {
        echo "<script>";
        echo"window.location = 'User_profile.php';";
        echo"</script>";
   echo "<form method='POST' action='User_profile.php'> <input id='button' type='submit' name='submit' value='proceed'/></form>";
    } else { echo "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY..."; } } }
if(isset($_POST['submit'])) { SignIn(); } ?>
</html>