<?php

include "header.php";
?>
        <div class="wrapper row3">
		  <main class="hoc container clear"> 
			<div class="col-lg-12" style="align-content: center;"> 
                
                <div class="text-content" style="text-align: left;">
                  <h3>Survey Results</h3>
						<table class="table" border=0px">
							  <thead>
								<tr>
								  <th scope="col"></th>
								  <th scope="col"></th>
								  <th scope="col"></th>
								</tr>
							  </thead>
							  <tbody class="text-blue">
								<tr>
								  <th >1</th>
								  <td>Total Number of Survey</td>
								  <?php
									$total = "select count(phone) as tot from user";
									$query = mysqli_query($conn,$total);
									$count = mysqli_fetch_assoc($query);?>
								  <td><?php echo $count['tot'] ?></td>
								</tr>
								<tr>
								  <th scope="row">2</th>
								  <td>Average age: <span id="range"></span></td>
								  <?php
								  $i = 0;
									$total = "select * from user";
									$query = mysqli_query($conn,$total);
									//fill array with data from user database
									while($row = mysqli_fetch_assoc($query))
									{
										$array[$i] = $row['age'];
										$i++;
									}
									sort($array); //sort array from small to large number
									$counter = count($array); //count how many rows does it have in database									
									
									//never mind this for loop, it helps you see your sort number//
									//uncomment the echo statement and run View Survey page under Survey results
									//results will show you min age, mid age and max age.
									for($j=0; $j < $counter;$j++) //loop from beginning to end of counter
									{
										
										//echo '<span class="text-black">.'.$array[$j].'  </span>';  //just to see range
									}
									?><!--It counts array then divide by 2 to get the middle age person-->
									<td><?php echo $array[$counter/2]; ?> Years</td>
								  
								</tr>
								<tr>
								  <th scope="row">3</th>
								  <td>Oldest Person who participated in survey</td>
								  <?php //check the oldest person
									$total = "select max(age) as MaxAge from user";
									$query = mysqli_query($conn,$total);
									$count = mysqli_fetch_assoc($query);?>
								  <td><?php echo $count['MaxAge'] ?> years</td>
								</tr>
								<tr>
								  <th scope="row">4</th>
								  <td>Youngest Person who participated in survey</td>
								  <?php //checks the youngest person
									$total = "select min(age) as minAge from user";
									$query = mysqli_query($conn,$total);
									$count = mysqli_fetch_assoc($query);?>
								  <td><?php echo $count['minAge'] ?> years</td>
								</tr>
								<tr>
								<td> </td>
								</tr>
								<?php
									$totalNum = "select count(phoneID) as tot from fav_food";
									$all = mysqli_query($conn,$totalNum);
									$allTot = mysqli_fetch_assoc($all);//calculating total rows to be divided by pizza,pasta or pap?>
								<tr>
								  <th scope="row">1</th>
								  <td>Percentage Of People who like Pizza: </td>
								  <?php //counting all pizzas in fav food table to be divided by all total rows above
									$total = "select count(Pizza) as totPiz from fav_food where pizza = 'Pizza'";
									$query = mysqli_query($conn,$total);
									$coupz = mysqli_fetch_assoc($query);?>
								  <td><?php echo round(($coupz['totPiz']/$allTot['tot'])*100,1) ?>%</td>
								</tr>
								<tr>
								  <th scope="row">2</th>
								  <td>Percentage of People who like Pasta</td>
								 <?php
									$tota = "select count(pasta) as totPas from fav_food where pasta = 'Pasta'";
									$query = mysqli_query($conn,$tota);
									$cou = mysqli_fetch_assoc($query);?>
								  <td><?php echo round(($cou['totPas']/$allTot['tot'])*100,1) ?>%</td>
								</tr>
								<tr>
								  <th scope="row">3</th>
								  <td>Percentage of People who like Pap and Wors</td>
								  <?php
									$tota = "select count(pap_wors) as totPap from fav_food where pap_wors = 'Pap and Wors'";
									$query = mysqli_query($conn,$tota);
									$check = mysqli_fetch_assoc($query);?>
								  <td><?php echo round(($check['totPap']/$allTot['tot'])*100,1) ?>%</td>
								</tr>
								<tr>
								<td> </td>
								</tr>
								<?php
									$totalRates = "select count(phoneID) as totRate from rate";
									$all = mysqli_query($conn,$totalRates);
									$totRates = mysqli_fetch_assoc($all);?>
									
								<tr> 
									<td></td>
									<td></td>
									<td>1.Strongly Agree, 5.Strongly Disagree</td>
								</tr>
								<tr>
								  <th scope="row">1</th>
								  <td>People like to eat out</td>
								  <?php //calculate sum of all eat out then divide them by totRates
									$tota = "select sum(eat_out) as totEat from rate";
									$query = mysqli_query($conn,$tota);
									$check = mysqli_fetch_assoc($query);?>
								  <td><?php echo round(($check['totEat']/$totRates['totRate']),1)?></td>
								</tr>
								<tr>
								  <th scope="row">2</th>
								  <td>People like to watch movies</td>
								  <?php
									$tota = "select sum(watch_movies) as totMov from rate";
									$query = mysqli_query($conn,$tota);
									$check = mysqli_fetch_assoc($query);?>
								  <td><?php echo round(($check['totMov']/$totRates['totRate']),1)?></td>
								</tr>
								<tr>
								  <th scope="row">3</th>
								  <td>People like to watch TV</td>
								  <?php
									$tota = "select sum(watch_tv) as totTv from rate";
									$query = mysqli_query($conn,$tota);
									$check = mysqli_fetch_assoc($query);?>
								  <td><?php echo round(($check['totTv']/$totRates['totRate']),1)?></td>
								</tr>
								<tr>
								  <th scope="row">4</th>
								  <td>People like to listen to the radio</td>
								  <?php
									$tota = "select sum(radio) as totRadio from rate";
									$query = mysqli_query($conn,$tota);
									$check = mysqli_fetch_assoc($query);?>
								  <td><?php echo round(($check['totRadio']/$totRates['totRate']),1)?></td>
								</tr>
							  </tbody>
							</table><div class="text-align: center">
									<a href="index.php"><button class="btn btn-primary">OK</button></a>
								  </div>
                </div>
            </div>
		</main>
	</div>
    <?php
   
	include "footer.php"
   ?>
    
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>