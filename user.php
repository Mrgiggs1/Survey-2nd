<?php
	function addUser($lname,$fname,$phone,$date,$age)
	{
		
		$conn = mysqli_connect('localhost','root','','survey');
		$insert= "insert into user values('$lname','$fname','$phone','$date','$age')";
		$query = mysqli_query($conn,$insert);
		
		if($query)
		{
			echo '<script type="text/javascript"> document.getElementById("userMsg").innerHTML = "User Captured" </script>';
		}
		else
		{
			echo '<script type="text/javascript"> alert("Error User capturing!") </script>';
		}	
		
		
	}
	

?>