<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   Name: <input type="text" name="fname">
   <input type="submit">
</form>
<?php
$Output="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // collect value of input field
     $name = $_REQUEST["fname"];
     if (empty($name)) {
         echo "Name is empty";
         echo '<script type="text/javascript">'
         , 'myFunction();'
         , '</script>'
         ;
     }
     else {
         echo $name;
         echo '<script type="text/javascript">'
         , 'myFunction();'
         , '</script>'
         ;
     }
}
?>
<script>
    var longMsg="";
    function myFunction(){
        document.getElementById("demo").innerHTML="Hello World!!!";
    }
</script>
<p id="demo"></p>
</body>
</html>