<!DOCTYPE html>
<html>
<?php 
	$connect=new MongoClient();
	$db=$connect->jojo_user;
?>

<head>
	<title>NCC - Main Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href = "css/bootstrap.css" rel = "stylesheet">
	<link type = "text/css" href = "css/style.css" rel = "stylesheet">
</head>

<body>
    <div class = "navbar navbar-inverse navbar-fixed-top">
		<div class = "container-fluid" id="home">                               
			<a href = "#" id="homeLink" class = "navbar-brand"><span class="glyphicon glyphicon-home"></span> MovieJoJo</a>
			<form class="navbar-form navbar-right" role="form"onsubmit = "return myFunction3()" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
				<div class="form-group">
					<input type="text" placeholder="Username" name="user1"class="form-control" required>
				</div>
				<div class="form-group">
					<input type="password" placeholder="Password" name="pass3" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-success">Check Ticket</button>
				&nbsp;&nbsp;
				<button type="button" class="btn btn-danger" id="regLink">Register</button>
			</form>
			<?php
  					$col3=$db->user;
  					$col4=$db->bookings;
					if(isset($_POST["user1"]))
						{
								$check=false;
								$query2=array('user'=>$_POST['user1']);
								$user_check=$col3->find($query2);
								foreach($user_check as $e){
									if($e['user']==$_POST['user1'])
										{
											if($e['pass']==$_POST['pass3'])
													$check=true;	
										
											else
												{
													echo '<script language="javascript">';
													echo 'alert("Invalid user password")';
													echo '</script>';

												}
									    }
										
								}
								if($check)
								
										{
											$user_check=$col4->find($query2);
											foreach($user_check as $g)
												{
													$users=$g["user"];
													$citys=$g["city"];
													$movies=$g["movie"];
													$dates=$g["date"];
													$seats=$g["seat"];
												}
											echo '<script language="javascript">';
											echo 'alert("\nUser:")';
											echo '</script>';
												
										}
						}
	
					?>

			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
			</button>

			<div class = "collapse navbar-collapse navHeaderCollapse">                               
				<ul class = "nav navbar-nav navbar-center">					
					<li><a href = "#" id = "aboutLink"><span class="glyphicon glyphicon-info-sign" ></span> Movies</a></li>
					<li><a href = "#" id = "teamLink"><span class="glyphicon glyphicon-user"></span> Cinema</a></li>             
					<li><a href = "#" id = "contactLink"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
				</ul>

			</div>

		</div>
	</div>

			<!--timer area-->
			<div class="container-fluid" id = "setbg">				
				<div class="row" id="ver_align">
					<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12"  height:150px;>
						<img src="img\monkey.jpg" style="float:left" height="150px" width="35%">
						<img src="img\banner.jpg" style="float:left" height="150px" width="65%">						
					</div>
					<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12" id="booknow" >
						<form role="form"id="form_border1" onsubmit = "return myFunction2()" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
						<div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1">
							<img src="img\book_now.png" height="195px" style="margin-left:-80px;">
						</div>
						<div class = "col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin-top:5px">
							<select  name="city"size="11">
  									<option value="CITY">CITY</option>
  									<option value="Aurangabad">Aurangabad</option>
 									<option value="Bangalooru">Bangalooru</option>
 								    <option value="Chennai">Chennai</option>
  									<option value="Daman">Daman</option>
  									<option value="Faridabad">Faridabad</option>
 									<option value="Goa">Goa</option>
 								    <option value="Hyderabad">Hyderabad</option>
 								    <option value="Indore">Indore</option>
 								    <option value="Jammu">Jammu</option>
 								    <option value="Lucknow">Lucknow</option>
 								    <option value="Mumbai">Mumbai</option>
 								    <option value="Pune">Pune</option>
 								    <option value="Port Blair">Port Blair</option>
 								    <option value="Surat">Surat</option>

							</select>
					   </div>
					   <div class = "col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:5px">
							<select name="movie"size="11">
  									<option value="MOVIE">Movie</option>
  									<option value="transformers">Transformers</option>
 									<option value="Avengers">Avengers</option>
 								    <option value="Expendibles3">Expendibles3</option>
  									<option value="BangBang">BangBang</option>
  									<option value="FindingFanny">FindingFanny</option>
 									<option value="GoGoagone">GoGoagone</option>
 								    <option value="FastandFurious">FastandFurious</option>
 								    <option value="Thor">Thor</option>
 								    <option value="Dhoom3">Dhoom3</option>
 								    <option value="Krish">Krish</option>
 								    <option value="Housefull">Housefull</option>
 								    <option value="Ring">Ring</option>
 								    <option value="Heropanti">Heropanti</option>
 							</select>
						</div>
					
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style = "height:580px; top:60%;">
							 <div class="form-group" style="margin-top:25px;">
								<input type="user" class="form-control set-font-weight" id="user1" name="user1" placeholder="Username" required>
							 </div>
							 <div class="form-group">						
								<input type="password" class="form-control set-font-weight" id="pass3" name="pass3" placeholder="Password" required>
							</div>
							<div class="form-group" >
								<input type="date" class="form-control set-font-weight" id="date" name="date" placeholder="DD/MM/YYYY" required>
							</div>
						</div>
						<div class = "col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:15px">
							<select name="seat"size="9">
  									<option value="No.of Seats">No.of Seats</option>
  									<option value="1">1</option>
 									<option value="2">2</option>
 								    <option value="3">3</option>
  									<option value="4">4</option>
  									<option value="5">5</option>
 									<option value="6">6</option>
 								    <option value="7">7</option>
 								    <option value="8">8</option>
 							</select>
						</div>
						<div class = "col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:50px">
							<button type="submit" class="btn btn-primary" id="confbook">Confirm BOOKING!!</button>
						</div>
					</form>	
					<?php
  					 $col=$db->user;
  					 $col2=$db->bookings;
					if(isset($_POST["user1"]))
						{
								$check=false;
								$query2=array('user'=>$_POST['user1']);
								$user_check=$col->find($query2);
								foreach($user_check as $e){
									if($e['user']==$_POST['user1'])
										{
											if($e['pass']==$_POST['pass3'])
													$check=true;	
										
											else
												{
													echo '<script language="javascript">';
													echo 'alert("Invalid user password")';
													echo '</script>';

												}
									    }
										
								}
								if($check)
								
										{
											$document=array
														(
															"user"=>$_POST["user1"],
															"city"=>$_POST["city"],
															"movie"=>$_POST["movie"],
															"date"=>$_POST["date"],
															"seat"=>$_POST["seat"],
														);
											$col2->insert($document);
											echo '<script language="javascript">';
											echo 'alert("Booking Confirmed(online booking)")';
											echo '</script>';
												
										}
						}
	
					?>





					</div>




					<div class = "col-lg-6 col-md-6 col-sm-6 col-xs-6" id="marquee"style="background-color:#333;" >
						<marquee>
						<img src="img\mov_1.jpg" style="float:left;margin:10px;" height="150px" width="75px">
						<img src="img\mov_2.jpg" style="float:left;margin:10px;" height="150px" width="75px">						
						<img src="img\mov_3.jpg" style="float:left;margin:10px;" height="150px" width="75px">						
						<img src="img\mov_4.jpg" style="float:left;margin:10px;" height="150px" width="75px">						
						<img src="img\mov_5.jpg" style="float:left;margin:10px;" height="150px" width="75px">
						<img src="img\mov_7.jpg" style="float:left;margin:10px;" height="150px" width="75px">
						</marquee>
					</div>


					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

						<div class="content">
							<div class="text">
								<br><br>
								 	          
							</div><!--text-->    	  	        
						</div> <!--/#content-->

					</div> <!--/#columns-->
				</div> <!--/#Row-->
			</div> <!--/#container-fluid-->

<div class="container-fluid" id="regbg">
		<div class="row top-align" id = "reg">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style = "height:580px; top:50%;left:50%; margin-left:-220px;">
				<form role="form"id="form_border2"style="margin-top:-40px;"onsubmit = "return myFunction()" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">

					<h1 style = "text-align:center;font-size:30px; color:white">REGISTRATION</h1><br>

					<div class="form-group">
						<input type="user" class="form-control set-font-weight" id="user" name="user" placeholder="Username" required>
					</div>
					<div class="form-group">						
						<input type="name" class="form-control set-font-weight" id="name" name="name" placeholder="Full Name" required>
					</div>
					<div class="form-group">						
						<input type="email" class="form-control set-font-weight" id="email" name="email" placeholder="Email Id" required>
					</div>
					<div class="form-group">						
						<input type="password" class="form-control set-font-weight" id="pass1" name="pass1" placeholder="Password" required>
					</div>
					<div class="form-group">						
						<input type="password" class="form-control set-font-weight" id="pass2" placeholder="Confirm Password" required>
					</div>
					
					<div class="form-group">						
						<input type="contact" class="form-control set-font-weight" id="number" name="number" placeholder="10 Digit Number"
						required>
					</div>

					<button type="submit" class="btn btn-success" id="regSubmit">Submit</button>

				</div>  <!--/#col-md-8-->
				</form>
				<?php
  					 $col=$db->user;
					if(isset($_POST["user"]))
						{
								$check=true;
								$query=array('user'=>$_POST['user']);
								$user_check=$col->find($query);
								foreach($user_check as $e){
									if($e['user']==$_POST['user'])
										$check=false;
								}
								if($check)
								
										{
											$document=array
														(
															"user"=>$_POST["user"],
															"name"=>$_POST["name"],
															"email"=>$_POST["email"],
															"pass"=>$_POST["pass1"],
															"phno"=>$_POST["number"],
														);
											$col->insert($document);
											echo '<script language="javascript">';
											echo 'alert("Registration Success")';
											echo '</script>';
												
										}
								else 
										{
											echo '<script language="javascript">';
											echo 'alert("user already registered")';
											echo '</script>';

										}
								
						}
	
			?>
			</div>	<!--end of row-->
		</div> <!--/#container-fluid-->	

	<div id = "aboutbg">
	<div class="container">
		<div class="row top-align" id = "about">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "height:580px;">
				<h2 style = "color:white;">Movies</h2>
				<p style = "color:white;"></p> <br>


					<h2 style = "color:white;"></h2>
					<p style = "color:white;"></p>
					<p style = "color:white;"> </p>
					<p style = "color:white;"></p>
					
				</div>  <!--/#col-md-8-->

			</div>	<!--end of row-->
		</div> <!--/#container-fluid-->
	</div>

		<div id = "teambg">
		<div class="container">
		<div class="row top-align" id = "team">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "height:580px;">
				<h2 style = "color:white;">Cinemas</h2>
				<p style = "color:white"></p><br>

					<h2 style = "color:white;"></h2>
					<p style = "color:white;"></p>
					<p style = "color:white;"></p>
					<p style = "color:white;"></p>
					
				</div>  <!--/#col-md-8-->

			</div>	<!--end of row-->
		</div> <!--/#container-fluid-->
		</div>		

		<div id = "contactbg"> 
		<div class="container">
		<div class="row top-align" id = "contact">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style = "height:580px;">
				<h2 style = "color:white;">Contact Us</h2>
				<p style = "color:white;"></p>
					<br>
					<h2 style = "color:white;"></h2>
					<p style = "color:white;"></p>
					<p style = "color:white;"> </p>
					<p style = "color:white;"></p>

				</div>  <!--/#col-md-8-->

			</div>	<!--end of row-->
		</div> <!--/#container-fluid-->
		</div>

<script src = "js/jquery-1.11.0.min.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/myscript.js"></script>
<script type="text/javascript" src = "js/scroll_bitch_scroll.js"></script>

<script type="text/javascript">
$(function($){
	$(document).ready(function{
	$(window).bind('resize', function()
	{
		resizeMe();
	}).trigger('resize');
	});
})(jQuery);

function resizeMe() {
	var preferredHeight = 768;  

	var displayHeight = $(window).height();
	var percentage = displayHeight / preferredHeight;
	var newFontSize = Math.floor(fontsize * percentage) - 1;
	$("body").css("font-size", newFontSize);
}
</script>

<script type="text/javascript">
	$('[data-toggle="popover"]').popover({trigger: 'hover','placement': 'bottom'});
</script>

<script type="text/javascript">
function myFunction() {
    var user = document.getElementById("user").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var phoneno = /^\d{10}$/;
    var contact = document.getElementById("number").value;
    var ok = true;
    if (pass1 != pass2) {
        alert("Passwords Do not match!");
        document.getElementById("pass1").style.borderColor = "#E34234";
        document.getElementById("pass2").style.borderColor = "#E34234";
        ok = false;
    }
    if(contact.match(phoneno)){}
    else{
    	alert("Enter 10 Digit Mobile Number");
    	document.getElementById("number").style.borderColor = "#E34234"
    	ok = false;
    }   
    return ok;
}
</script>
 <script type="text/javascript">function myFunction2(){return ok;} </script>
 <script type="text/javascript">function myFunction3(){return ok;} </script>
</body>
</html>
