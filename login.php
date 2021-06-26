<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
mysqli_select_db($conn,"mini_project");

$username=$_POST['email'];
$password=$_POST['password'];
$sql="select 'Email','password' from registration where Email='$username' AND password='$password' limit 1";
$result=mysqli_query($conn,$sql) or die("something went wrong".$conn->error);
$num=mysqli_num_rows($result);

if($num>0){
	echo "login successful";
	header("location:menu.html");
}
	else{
		
		echo("<script LANGUAGE='JavaScript'>
				      window.alert('you have entered incorrect credentials');
					  window.location.href='login.html';
					  </script>");
	}
?>
	