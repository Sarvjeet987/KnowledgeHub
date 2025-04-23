<!-- html code -->
<!-- <form action="index.php" method="post" >
    Enter your First name 
    <input type="text" name="FName" id="fname"><br><br>
    Enter your last name 
    <input type="text" name="LName" id="lname"><br><br>
    <input type="submit">
</form> -->

<!-- php code -->
<?php 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="knowledgehub";
 $conn= new mysqli ($servername , $username , $password , $dbname);
//  condition chek line  /as you wish
if($conn->connect_error)
{
    die("connection fail");
}
$username=$_POST['username'];
$password=$_POST['password'];
$sql="INSERT INTO `data` (`S.No`, `Username`, `Password`) VALUES (NULL, 'username', 'password')";
if($conn->query($sql)==true)
{
    echo "New Record added";
}
else
{
    echo "Error";
}
$conn->close();

?>