<?php
$servername="localhost";
$username="root";
$pass="";
$database_name="bhaveshhaswani";

$conn=mysqli_connect($servername, $username, $pass, $database_name);


if(!$conn)
{die("Connection Failed:" .mysqli_connect_errorno().mysqli_connect_error());
}

if(isset($_POST['submit']))
{
$fullname= $_POST['fullname'];
$email= $_POST['email'];
$user=$_POST['user'];
$password= $_POST['password']; 



$s = "SELECT * FROM userregistration WHERE user ='$user'";
$result = mysqli_query($conn, $s);
$num=mysqli_num_rows($result);
	
	
	$sql_query = "INSERT INTO userregistration(fullname,email,user,password) VALUES('$fullname','$email','$user','$password')";
	
	if($num==1)
	{
		echo "Username already taken";
	}
	else
	{
		echo "Error:" .$sql. "" .mysqli_error($conn);
	}
	mysqli_close($conn);
}

?>
	