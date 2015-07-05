<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Key Management System </title>
        <meta charset="utf-8">
        <style>
            body
            {
                background-image: url('key-in-door.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size:100% 100%;
            }
            h1
            {
                font-size:65px;
                color: #fffffd;
                margin:2% 5% 2% 5%;
                text-shadow: 2px 2px black;
                background-color:black;
                text-align: center;
                opacity:0.85;
            }
            h2
            {
                color:#B5B5B3;
                font-size:25px;
                text-shadow: 1px 1px black;
            }
            h3
            {
                color:#B5B5B3;
                font-size:20px;
                margin:1% 1% 1% 1%;
                text-shadow: 1px 1px black;
                text-align:center;
            }
            h4
            {
                color: white;
                font-size:15px;
                margin:0% 0% 0% 0%;
            }
            legend
            {
                margin:0% 0% 0% 10%;
            }
            div.footer
            {
                opacity:0.5;
                background-color:black;
                position:absolute;
                bottom:0%;
                right:2%;
                margin: 0px 0px 0px 0px;
            }
            div.adminButton{
                position:absolute;
                bottom: 26%;
                right:14%;
            }
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
            $(document).ready(function(){$("#div").fadeIn(3000);});
        </script>
        </head>
    <body>
        <h1 style="padding:1% 20%;">Key Management System</h1>
            <fieldset style="width:12%; position:absolute; left:70%;">
                <legend style="width:80%;"><h2>User Login</h2></legend>
                <form method="POST" action="userloginlink.php" > User Id <br><input type="text" name="UserId" size="20"><br> Pin <br><input type="Pin" name="Pin" size="20"><br> <input id="button" type="submit" name="submit" value="Log-In"/> </form>

            </fieldset>
		<div class="adminButton" style="position:absolute; top:70%;">
            <button style="margin:10px 10px 10px 10px;" onclick="window.location.assign('Admin_login.php');">Admin login</button>
        </div>
        <div class="footer" style="float:bottom;">
            <h4>A project of Computer Science and Engineering department,
                University of Moratuwa.</h4>
        </div>
    </body>
</html>