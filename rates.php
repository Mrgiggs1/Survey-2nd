<?php
	function addRates($phone,$eatOut,$movies,$tv,$fmradio)
	{
		$conn = mysqli_connect('localhost','root','','survey');
		
		
		$insRates = "insert into rate values('$phone','$eatOut','$movies','$tv','$fmradio')";
		$query = mysqli_query($conn,$insRates);
		
		if($query)
		{
			echo '<script type="text/javascript"> document.getElementById("rates").innerHTML = "Rates are Captured" </script>';
		}
		else
		{
			echo '<script type="text/javascript"> alert("Error Rates insert!") </script>';
		}
	}
?>