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
	$emailquery="select * from registration where email='$email' ";
	$result=mysqli_query($conn,$emailquery);
    $emailcount=mysqli_num_rows($result);	
	if($emailcount>0){
		echo "email already exists";
	}
	else{
		if($password==$cpassword){
			$q="insert into registration(email, name, username, password, confirmpassword,contactnumber,city) values ('$email','$fname', '$uname', '$password', '$cpassword', '$cnumber','$city')";
		    $iquery=mysqli_query($conn,$q);
			if($iquery){
				echo("<script LANGUAGE='JavaScript'>
				      window.alert('sucessfully registered');
					  window.location.href='login.html';
					  </script>");
				
			}
			else{
				echo("<script LANGUAGE='JavaScript'>
				      window.alert('Registration not successful');
					  window.location.href='login.html';
					  </script>");
			}
		}
		else{
			echo "passwords not matching";
	}
	}
	}
	else{
		echo "All fields are required";
	}
	?>