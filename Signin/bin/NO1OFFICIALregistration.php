<?php
/*session_start();*/

$servername='localhost';
$username='root';
$pass='';
$database_name='bhaveshhaswani';

$conn=mysqli_connect($servername, $username, $pass, $database_name);

if(!$conn)
{die("Connection Failed:" .mysqli_connect_errorno().mysqli_connect_error());
}

if(isset($_POST['create']))
{
$fullname=$_POST['fullname'];
$email= $_POST['email'];
$user=$_POST['user'];
$password=$_POST['password'];


$s = "SELECT * FROM userregistration WHERE user ='$user'";
$result = mysqli_query($conn, $s);
$num=mysqli_num_rows($result);

if($num == 1)
{
	echo" Username Already Taken";
}
else
{
	$reg= "INSERT INTO userregistration(fullname,email,user,password) VALUES('$fullname', '$email', '$user', '$password')";
	mysqli_query($conn, $reg);
	echo" Registration Successful";
}

/*
$sql_query = "INSERT INTO userregistration(fullname,email,user,password) VALUES('$fullname', '$email', '$user', '$password')";

	if(mysqli_query($conn, $sql_query))
	{
		echo "New deatails entered successfully!";
	}
	else
	{
		echo "Error:" .$sql. "" .mysqli_error($conn);
	}
	mysqli_close($conn);
*/
}

?>