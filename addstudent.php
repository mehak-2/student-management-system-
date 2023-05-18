<?php
session_start();
if(isset($_SESSION['uid']))
{
    echo "";

}
else
{
header('location: ../login.php');
}
?>

<?php
include('header.php');
include('titlehead.php');
?>

<form method="post" action="addstudent.php" enctype="multipart/form-data">
    <table align="center" border="1" style="width:70%; margin-top:40px;">
    <tr>
        <th>Roll No</th>
        <td><input type="text" name="rollno" placeholder="enter roll no" required></td>
</tr>
<tr>
        <th>Full Name</th>
        <td><input type="text" name="name" placeholder="enter Full Name" required></td>
</tr>
<tr>
        <th>City</th>
        <td><input type="text" name="city" placeholder="enter city" required></td>
</tr>
<tr>
        <th>Parents Contact no</th>
        <td><input type="text" name="pcon" placeholder="enter the contact no of parents" required></td>
</tr>
<tr>
        <th>Standard</th>
        <td><input type="number" name="std" placeholder="enter standard" required></td>
</tr>
<tr>
        <th>Image</th>
        <td><input type="file" name="simg"  required></td>
</tr>

<tr>
       
<td colspan="2" align="center">
<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
<input type="submit" name="submit" value="submit"></td>

</tr>

</table>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    include('../dbcon.php');
    $rolno= $_POST['rollno'];
    $name= $_POST['name'];
    $city= $_POST['city'];
    $pcon= $_POST['pcon'];
    $std= $_POST['std'];
   

    $qry="INSERT INTO `student` ( `rollno`, `name`, `city`, `pcont`, `standerd`) VALUES ('$rolno', '$name','$city','$pcon','$std')";
$run= mysqli_query($con,$qry);
if($run == true)
{
     ?>

<script>
alert('data inserted successfully.');
</script>

<?php
}
}


?>

