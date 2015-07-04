<!DOCTYPE html>
<html lang="en">
<head>
    <title> Admin profile </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Styles.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <style>
        tr {
            background-color: white;
            opacity: 0.8;
            border-style: solid;
            border-width: 3px;
            border-color: #b4c3c3;
        }
        td{
            border-style: solid;
            border-width: 3px;
            border-color: #b4c3c3;
        }
        th{
            border-style: solid;
            border-width: 3px;
            border-color: #b4c3c3;
        }
        thead{
            border-style: solid;
            border-width: 3px;
            border-color: #b4c3c3;
        }
    </style>
</head>
<body onload="displayKeys()">
<h1 style="padding:1% 20%; color:white;">Key Management System</h1>
<div style="margin-left:3%;"><form action="#" method="get">Select the table to display: <input type="radio" name="UserKey" value="Keys" style="display: inline; margin:0 5px 0 2px;" checked onclick="displayKeys()">Keys<input value="Users" type="radio" name="UserKey" style="margin:0 5px 0 10px; display:inline;" onclick="displayUsers()">Users</form></div>
<div class="container" id="keyUserDiv">
	<script>
        function displayKeys(){
            //var xmlhttp;
            if(window.XMLHttpRequest){
                xmlhttp = new XMLHttpRequest();
            }
            else{
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                    document.getElementById("keyUserDiv").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","test3.php",true);
            xmlhttp.send();
            //document.getElementById("keyUserDiv").innerHTML="<p> This table contains information about the keys: </p> <table class='table'><thead> <tr> <th>KeyID</th> <th>Related Door</th> <th>Status</th> <th>Current Key Holder</th> <th>Last Location</th> <th>Time Stamp</th> </tr> </thead> <tbody> <tr> <td>1</td> <td>Front Door</td> <td>Available</td> <td> </td> <td> </td> <td> </td> </tr> <tr> <td>3</td> <td>Back Door</td> <td>Not Available</td> <td>Saman rathnayake</td> <td> </td> <td> </td> </tr> <tr> <td>6</td> <td>Wash room door</td> <td>Available</td> <td> </td> <td> </td> <td> </td> </tr> <tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr> </tbody></table>";

        }
        function displayUsers(){
            //document.getElementById("keyUserDiv").innerHTML="<p> This table contains information about the users: </p> <table class='table'><thead> <tr> <th>UserID</th> <th>UserName</th> <th>Pin</th> <th>Accessible Keys</th> </tr> </thead> <tbody> <tr> <td>1</td> <td>Nimal Rathnayake</td> <td>12345</td> <td>1,2,4 </td></tr> <tr> <td>3</td> <td>Nimal Thomas</td> <td>75865</td> <td>1,5,4,7,8</td> </tr> <tr> <td>6</td> <td>Kamal Silva</td> <td>88555</td> <td>1,5,8,9 </td> </tr> <tr> <td>7</td> <td>Somapala Kasun</td> <td>75558</td> <td>1,5,8,13</td> </tr> </tbody></table>";
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("keyUserDiv").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","test3.php",true);
            xmlhttp.send();

        }
    </script>
    

</div>
<div class="footer" style="margin:0 0 0 0;">
    <h4 style="margin:0 0 0 0; font-size: 16px;">A project of Computer Science and Engineering department,
        University of Moratuwa.</h4>
</div>
</body>
</html>