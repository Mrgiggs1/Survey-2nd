<?php
	include "header.php";
?>	

<div class="wrapper row3">
	
  <main class="hoc container clear"> 
    <div class="col-lg-12" style="align-content: center;"> 
	<div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
	  <span> Personal Details</span>
	</div>
      <form method="POST">
		  <br>
		  <div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Surname</label>
			<div class="col-sm-6">
			  <input type="text" required name="lname" class="form-control" id="inputEmail3" placeholder="Last Name" value="<?php if(isset($_POST['lname'])){echo $_POST['lname'];}?>">
			</div><label><span>*</span></label>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword3" class="col-sm-2 col-form-label">First Names</label>
			<div class="col-sm-6">
			  <input type="text" required name="fname" class="form-control" id="inputPassword3" placeholder="First Name" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];}?>">
			</div><label><span>*</span></label>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword3"  class="col-sm-2 col-form-label">Contact Number</label>
			<div class="col-sm-6">
			  <input type="text" name="phone" required class="form-control" id="inputPassword3" placeholder="Phone Number" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];}?>">
			</div><label><span class="text-danger" id="phoneError"></span>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword3"  class="col-sm-2 col-form-label" >Date</label>
			<div class="col-sm-6">
			  <input type="date" name="curDate" required class="form-control" max="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>" id="inputPassword3" placeholder="Date" value="<?php if(isset($_POST['curDate'])){echo $_POST['curDate'];}?>">
			</div><label><span>* </span></label>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword3"  class="col-sm-2 col-form-label">Age</label>
			<div class="col-sm-2">
			  <input type="text" name="age" required class="form-control" id="inputPassword3" placeholder="Age">
			</div><label><span>* </span> </label><span class="text-danger" id="ageError"></span>
		  </div>
		  <br><br>
			<div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
			  <span> What is your favourite food? (You can choose more than 1 answer)</span>
			</div><br>
		  <div class="form-group row">
			<div class="col-sm-2">
			  <div class="form-check">
					<input class="form-check-input" name="pizza" value="Pizza" type="checkbox" id="gridCheck1">
					<label class="form-check-label" style="text-color: primary" >
					  <p class="text-black">Pizza</p>
					</label>
				  </div>
			</div>
		  </div>
		  <div class="form-group row">
			<div class="col-sm-3">
			  <div class="form-check">
					<input class="form-check-input" name="pasta" value="Pasta" type="checkbox" id="gridCheck1">
					<label class="form-check-label" style="text-color: primary" >
					  <p class="text-black">Pasta</p>
					</label>
				  </div>
			</div>
		  </div>
		  <div class="form-group row">
			<div class="col-sm-3">
			  <div class="form-check">
					<input class="form-check-input" name="pap" value="Pap and Wors" type="checkbox" id="gridCheck1">
					<label class="form-check-label" style="text-color: primary" >
					  <p class="text-black">Pap and Wors</p>
					</label>
				  </div>
			</div>
		  </div>
				
		  <div class="form-group row">
			<div class="col-sm-3">
			  <div class="form-check">
					<input class="form-check-input" name="chicken" value="Chicken stir fry" type="checkbox" id="gridCheck1">
					<label class="form-check-label" style="text-color: primary" >
					  <p class="text-black">Chicken stir fry</p>
					</label>
				  </div>
			</div>
		  </div>
		  <div class="form-group row">
			<div class="col-sm-3">
			  <div class="form-check">
					<input class="form-check-input" name="beef" value="Beef stir fry" type="checkbox" id="gridCheck1">
					<label class="form-check-label" style="text-color: primary" >
					  <p class="text-black">Beef stir fry</p>
					</label>
				  </div>
			</div>
		  </div>
		  <div class="form-group row">
			<div class="col-sm-3">
			  <div class="form-check">
					<input class="form-check-input" name="other" value="Other" type="checkbox" id="gridCheck1">
					<label class="form-check-label" style="text-color: primary" >
					  <p class="text-black">Other</p>
					</label>
				  </div>
			</div>
		  </div>
			<br><br>
			<div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
			  <span> On Scale of 1 to 5 indicate whether you strongly agree or strongly Disagree</span>
			</div>
			 <div class="form-group" style="text-color: primary;">
		  </div>
			<table class="table">
			  <thead class="thead-dark">
				<tr style="text-align: center;">
				  <th scope="col"></th>
				  <th scope="col" style="text-align: center;">Strongly Agree<br>(1)</th>
				  <th scope="col" style="text-align: center;">Agree<br>(2)</th>
				  <th scope="col" style="text-align: center;">Neutral<br>(3)</th>
				  <th scope="col" style="text-align: center;">Disagree<br>(4)</th>
				  <th scope="col" style="text-align: center;">Strongly Disagree<br>(5)</th>
				</tr>
			  </thead>
			  <tbody style="text-align: center" class="text-black">
				<tr>
				  <td>I like to eat Out</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="eat" id="exampleRadios2" value="1">
							  <label class="form-check-label" for="eat">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="eat" id="exampleRadios2" value="2">
							  <label class="form-check-label" for="eat">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="eat" id="exampleRadios2" value="3">
							  <label class="form-check-label" for="eat">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="eat" id="exampleRadios2" value="4">
							  <label class="form-check-label" for="eat">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="eat" id="exampleRadios2" value="5">
							  <label class="form-check-label" for="eat">
							  </label>
							</div>
						</td>
				</tr>
				<tr>
				  <td>I like to watch Movies</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="movies" id="exampleRadios2" value="1">
							  <label class="form-check-label" for="movies">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="movies" id="exampleRadios2" value="2">
							  <label class="form-check-label" for="movies">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="movies" id="exampleRadios2" value="3">
							  <label class="form-check-label" for="movies">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="movies" id="exampleRadios2" value="4">
							  <label class="form-check-label" for="movies">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="movies" id="exampleRadios2" value="5">
							  <label class="form-check-label" for="movies">
							  </label>
							</div>
						</td>
				</tr>
				<tr>
				  <td>I like to watch TV</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="tv" id="exampleRadios2" value="1">
							  <label class="form-check-label" for="tv">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="tv" id="exampleRadios2" value="2">
							  <label class="form-check-label" for="tv">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="tv" id="exampleRadios2" value="3">
							  <label class="form-check-label" for="tv">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="tv" id="exampleRadios2" value="4">
							  <label class="form-check-label" for="tv">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="tv" id="exampleRadios2" value="5">
							  <label class="form-check-label" for="tv">
							  </label>
							</div>
						</td>
				</tr>
				<tr>
				  <td>I like to listen to the radio</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="fmradio" id="exampleRadios2" value="1">
							  <label class="form-check-label" for="fmradio">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="fmradio" id="exampleRadios2" value="2">
							  <label class="form-check-label" for="fmradio">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="fmradio" id="exampleRadios2" value="3">
							  <label class="form-check-label" for="fmradio">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="fmradio" id="exampleRadios2" value="4">
							  <label class="form-check-label" for="fmradio">
							  </label>
							</div>
						</td>
						<td>
							<div class="form-check">
							  <input class="form-check-input" required type="radio" name="fmradio" id="exampleRadios2" value="5">
							  <label class="form-check-label" for="fmradio">
							  </label>
							</div>
						</td>
				</tr>
			  </tbody>
			</table>
		  
				  <div class="form-group row" style="text-align: center">
					<div class="col-sm-10">
					  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</div>
				  </div>
				</form>
	  
      </div>
    </div>
    <div class="clear"></div>
  </main>
</div>
 <?php //backend code to database
	if(isset($_POST['submit'])) //if the form application is submitted then run below code
	{
		//users $_POST gets data from html to php variables
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$phone = $_POST['phone'];
		$date  = $_POST['curDate'];
		$age   = $_POST['age'];
		
		//fav food
		$pizza = $_POST['pizza'];
		$pasta = $_POST['pasta'];
		$pap = $_POST['pap'];
		$chicken = $_POST['chicken'];
		$beef = $_POST['beef'];
		$other = $_POST['other'];
		
		//rates
		$eatOut = $_POST['eat'];
		$movies = $_POST['movies'];
		$tv = $_POST['tv'];
		$fmradio = $_POST['fmradio'];
		
		if($age < 5 || $age > 120) //checks if age is less than 5 or greater than 120
		{
			echo '<script type="text/javascript"> document.getElementById("ageError").innerHTML = "Enter Age between 5 and 120" </script>';
		
		}else
		{
			if(preg_match( "/^(\+27|0)[6-8][0-9]{8}$/",$phone ))
			{
			
				$insertUser= "insert into user values('$lname','$fname','$phone','$date','$age')";
				$queryUser = mysqli_query($conn,$insertUser);
				
				if($queryUser) //if data is inserted in user table then insert in fav_food table
				{
					$insertFood = "insert into fav_food values('$phone','$pizza','$pasta','$pap','$chicken','$beef','$other')";
					$queryFood = mysqli_query($conn,$insertFood);
					
					if($queryFood) //if data is inserted in fav_food table then insert in rates table
					{
						$insRates = "insert into rate values('$phone','$eatOut','$movies','$tv','$fmradio')";
						$queryRates = mysqli_query($conn,$insRates);
						if($queryRates) //if data is inserted in fav_food table then insert in rates table
						{
							echo '<script type="text/javascript"> alert("Data is Captured!") </script>';
							echo '<script>
									window.location.href="viewSurvey.php";
									</script>
									';
						}
						
					}
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error capturing!") </script>';
				}
			}else{
				echo '<script type="text/javascript"> document.getElementById("phoneError").innerHTML = "*Enter valid Phone Number" </script>';
			}
		}
		
		
	}
		include "footer.php"
	  ?> <!-- end of backend code -->
	  
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>