<!DOCTYPE HTML>
<html>
<meta charset="UTF-8">
<title> student management system</title>
</head>
<body>
    <h3 align="right" style="margin-right:20px;"><a href="login.php">admin login</a></h3>
    <h1>welcome to student management system</h1>
    <form method="post" action="index.php">
        <table style="width:50%;" align="center" border="1">

            <tr>
                <td colspan="2">student information</td>
</tr>
<tr>
    <td>choose standard</td>
    <td>
        <select name="std">
            <option value="1">1st</option>
            <option value="2">2nd</option>
            <option value="3">3rd</option>
            <option value="4">4th</option>
            <option value="5">5th</option>
            <option value="6">6th</option>
            <option value="7">7th</option>
            <option value="8">8th</option>
            <option value="9">9th</option>
            <option value="10">10th</option>
          
        
</select>
</td>
</tr>

<tr> 
    <td align="left">enter roll no</td>
    <td><input type="text" name="rollno" required>
</td>
</tr>
<tr>
    <td colspan="2" align="center" >
        <input type="submit" name="submit" value="show Info"></td>
</tr>
</table>
</form>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
$standerd= $_POST['std'];
$rollno= $_POST['rollno'];

include('dbcon.php');
include('function.php');


    showdetails($standerd,$rollno);
}
?>