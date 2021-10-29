<?php
	function addFavFood($phoneID,$pizz,$pasta,$pap,$chicken,$beef,$other)
	{
		$conn = mysqli_connect('localhost','root','','survey');
		
		
		$ins = "insert into fav_food values('$phoneID','$pizz','$pasta','$pap','$chicken','$beef','$other')";
		$query = mysqli_query($conn,$ins);
		
		if($query)
		{
			echo '<script type="text/javascript"> document.getElementById("foodIns").innerHTML = "Favorite Food Captured" </script>';
		}
		else
		{
			echo '<script type="text/javascript"> alert("Error Food insert!") </script>';
		}
	}

?>