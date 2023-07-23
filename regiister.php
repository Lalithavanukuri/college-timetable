<?php 
	$fname =$_POST['fname'];
	$lname =$_POST['lname'];
	$rollno =$_POST['rollno'];
	$sec =$_POST['sec'];
	$conn = new mysqli("localhost","root","","mydb");
    if ($conn -> connect_errno)
    {
       echo "Failed to connect to MySQL: " . $conn -> connect_error;
       exit();
    }
	else
	{
			$sql = "INSERT INTO users1 (fname,lname,rollno,sec)values ('$fname','$lname','$rollno','$sec')";
			if ($conn->query($sql))
			{
				echo "Registered successfully";
			}
			else
			{
				echo "Error: ". $sql ."  ". $conn->error;
			}
			$conn->close();
	}
?>