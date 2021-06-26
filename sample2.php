<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
//echo "connected successfully";
mysqli_select_db($conn,"mini_project");
if(isset($_POST['email']))
{
	$username=$_POST['email'];
	$password=$_POST['password'];
	$sql="select Email,password from 'registration' where username='".$username."'AND password='".$password."' limit 1";
	$result=mysqli_query($conn,$sql) or die("something went wrong".$conn->error);
	$num=mysqli_num_rows($result);
	echo "no.of rows returned".$num;
	if($num>0){
		echo "you have successfully logged in";
		exit();
	}
	
	else{
		echo "you have entered incorrect credentials";
	}
}
	?>
		
	