<?php
$servername="localhost:3308";
$username="root";
$password="";
$database_name="bhaveshhaswani";

$conn=mysqli_connect($servername, $username, $password, $database_name);

/*$servername="localhost";
$username="root";
$password="";
$database_name="bhaveshhaswani";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{die("Connection Failed:" .mysqli_connect_error());
}*/

if(!$conn)
{die("Connection Failed:" .mysqli_connect_errorno().mysqli_connect_error());
}

if(isset($_POST['submit']))
{
	$fname= $_POST['fname'];
	$mname= $_POST['mname'];
	$lname= $_POST['lname'];
	$gender= $_POST['gender'];
	
	$dob= $_POST['dob'];
	$oparr= $_POST['optional'];
	$op=implode(",", $oparr)
	$college= $_POST['college'];
	
	$ResAdd= $_POST['ResAdd'];
	$PerAdd= $_POST['PerAdd'];
	$emailID= $_POST['emailID'];
	$phone= $_POST['phone'];
	$message= $_POST['message'];  
	
	
	$sql_query = "INSERT INTO bh_feedback(fname,mname,lname,gender,dob,optional,college,ResAdd,PerAdd,emailID,phone,message) VALUES('$fname','$mname','$lname','$gender','$dob','$op','$college','$ResAdd','$PerAdd','$emailID','$phone','$message')";
	
	if(mysqli_query($conn, $sql_query))
	{
		echo "New deatails entered successfully!";
	}
	else
	{
		echo "Error:" .$sql. "" .mysqli_error($conn);
	}
	mysqli_close($conn);
}

?>
	