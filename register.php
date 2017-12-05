<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="testdb";

$con= mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_errno())
{
	echo "Failed to connect to mySQL." . mysqli_connect_error();
}
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$email=$_GET['email'];
$username=$_GET['uname'];
$password=$_GET['pword'];
$confirmpassword=$_GET['cpword'];
$contactno=$_GET['contactno'];

$sql="insert into register(Fname,Lname,email,username,password,confirmpassword,contactno.) values('$fname','$lname','$email','$username','$password','$confirmpassword','$contactno')";

if(mysqli_query($con,$sql)===TRUE)
{
	echo "Query entered successfully!!!";
}
else{
	die("Query does not exists!!");
}

?>