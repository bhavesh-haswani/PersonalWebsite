<?php
/*session_start();*/



$servername='localhost:3308';
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


	/*
	$s = "SELECT * FROM userregistration WHERE user ='$user'";
	$result = mysqli_query($conn, $s);
	$num=mysqli_num_rows($result);
	*/

	$s = "SELECT * FROM bh_userregistration WHERE user ='$user'";		//userregistration
	$result = mysqli_query($conn, $s);
	$num=mysqli_num_rows($result);
	//$num=mysqli_num_rows(mysqli_query($conn, $s));

	/*
	if($num == 1)
	{
		echo "Username Already Taken";
	}*/


	if($num>0)
	{
		echo "Username Already Taken";
	}
	else
	{
		$reg= "INSERT INTO bh_userregistration(fullname,email,user,password) VALUES('$fullname', '$email', '$user', '$password')";
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