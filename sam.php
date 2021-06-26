<?php
$servername="localhost";
$email=$_POST['email'];
$fname= $_POST['name'];
$uname= $_POST['username'];
$password= $_POST['password'];
$cpassword = $_POST['confirmpassword'];
$cnumber = $_POST['contactnumber'];
$city = $_POST['city'];
	if(!empty($email)&& !empty($fname)&& !empty($uname)&& !empty($password)&& !empty($cpassword)&& !empty($cnumber)&& !empty($city)){
	$conn =mysqli_connect('localhost','root','');
	if(!$conn){
		die("Connection Failed : ". $conn->connect_error);
	} 
	mysqli_select_db($conn,"mini_project");
	$q="insert into registration(email, name, username, password, confirmpassword,contactnumber,city) values ('$email','$fname', '$uname', '$password', '$cpassword', '$cnumber','$city')";
	$result=mysqli_query($conn,$q) or die("error".$conn->error);
	if($result){
		echo "New Registration successful";
	} 
	else{
		echo "registration not successful";
	}
	}

	else{
		echo "All fields are required";
	}
	?>
	

