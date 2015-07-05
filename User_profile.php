<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title> Key Management System </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Styles.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <style>
        tr {
            background-color: white;
            opacity: 0.5;
        }

    </style>
</head>
<body>
<h1 style="padding:1% 20%;">Key Management System</h1>
<div style="margin-left:3%;"><form action="#" method="get">Select the table to display: <input type="radio" name="UserKey" value="Keys" style="display: inline; margin:0 5px 0 2px;" checked onclick="TakenKeys()">TakenKeys<input value="Users" type="radio" name="UserKey" style="margin:0 5px 0 10px; display:inline;" onclick="AvailableKeys()">AvailableKeys</form></div>
<div class="container" id="keyUserDiv">
    <script>
        function TakenKeys(){
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
            xmlhttp.open("GET","keyhistory.php",true);
            xmlhttp.send();
            //document.getElementById("keyUserDiv").innerHTML="<p> This table contains information about the keys: </p> <table class='table'><thead> <tr> <th>KeyID</th> <th>Related Door</th> <th>Status</th> <th>Current Key Holder</th> <th>Last Location</th> <th>Time Stamp</th> </tr> </thead> <tbody> <tr> <td>1</td> <td>Front Door</td> <td>Available</td> <td> </td> <td> </td> <td> </td> </tr> <tr> <td>3</td> <td>Back Door</td> <td>Not Available</td> <td>Saman rathnayake</td> <td> </td> <td> </td> </tr> <tr> <td>6</td> <td>Wash room door</td> <td>Available</td> <td> </td> <td> </td> <td> </td> </tr> <tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr> </tbody></table>";

        }
        function AvailableKeys(){
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
            xmlhttp.open("GET","keyAvailable.php",true);
            xmlhttp.send();
            //document.getElementById("keyUserDiv").innerHTML="<p> This table contains information about the keys: </p> <table class='table'><thead> <tr> <th>KeyID</th> <th>Related Door</th> <th>Status</th> <th>Current Key Holder</th> <th>Last Location</th> <th>Time Stamp</th> </tr> </thead> <tbody> <tr> <td>1</td> <td>Front Door</td> <td>Available</td> <td> </td> <td> </td> <td> </td> </tr> <tr> <td>3</td> <td>Back Door</td> <td>Not Available</td> <td>Saman rathnayake</td> <td> </td> <td> </td> </tr> <tr> <td>6</td> <td>Wash room door</td> <td>Available</td> <td> </td> <td> </td> <td> </td> </tr> <tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr><tr> <td>7</td> <td>Security office</td> <td>Booked</td> <td>Kamal perera</td> <td> </td> <td> </td> </tr> </tbody></table>";

        }
        </script>

    </div>
<div class="footer" style="margin:0 0 0 0;">
    <h4 style="margin:0 0 0 0; font-size: 16px;">A project of Computer Science and Engineering department,
        University of Moratuwa.</h4>
</div>
</body>
</html>