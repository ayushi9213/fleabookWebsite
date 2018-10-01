<!DOCTYPE html>
<html lang="en">
<head>

<style>


img{
	height:180px;
	width:120px
	
}

div.book1{
	position:absolute;
	animation: moving 32s linear -4s infinite;
	
}

div.book2{
	position:absolute;
	animation: moving 32s linear -8s infinite;
	
}

div.book3{
	position:absolute;
	animation: moving 32s linear -12s infinite;
	
}


div.book4{
	position:absolute;
	animation: moving 32s linear -16s infinite;
	
}


div.book5{
	position:absolute;
	animation: moving 32s linear -20s infinite;
	
}


div.book6{
	position:absolute;
	animation: moving 32s linear -24s infinite;
	
}


div.book7{
	position:absolute;
	animation: moving 32s linear -28s infinite;
	
}

div.book8{
	position:absolute;
	animation: moving 32s linear -32s infinite;
	
}


@keyframes moving{
    from {
		top:700px;
		left: 0%}
    to {
		top:700px;
		left: 100%}
}

img.mySlides{
	opacity: 0.5;
	width:100%;
	height:500px;
	margin-top:0px;
}

h4.heading {	
	font-family: 'CoreCircus', sans-serif;
	text-transform: uppercase;
	font-size: 200px;
	text-align: center;
	line-height: 1;
	margin: 0;
	top: 300px;
	left: 50%;
	transform: translate(-50%, -50%);
	position: absolute;

	
}



/* Set a style for all buttons */


/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}



span.psw {
    float: right;
    padding-top: 16px;
}


.bac
{
	margin-top:-20px;
	
}







</style>
  <title>FleaBook</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Welcome to fleaBook.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
		
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
		
		
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
		
		
		<!--<li><a href="#"><span class="glyphicon glyphicon-user"></span><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</a></li>-->
        <li><a href="#" data-toggle="modal" data-target="#myModal2">
      					<span class="glyphicon glyphicon-log-in">
      					</span> 
      					Login
      				</a>
      			</li>
				<div id="myModal2" class="modal fade" role="dialog">
				  	<div class="modal-dialog">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<button type="button" class="close" data-dismiss="modal">
				        			&times;
				        		</button>
				        		<h4 class="modal-title">
				        			Login
				        		</h4>
				      		</div>
				      		<div class="modal-body">
				        		<div class="container">
									<div class="row">
						  				<div class="col-sm-1 col-md-1 col-xs-3">
						  				</div>
						  				<div class="col-sm-4 col-md-4 col-xs-12 ">
							  				<center>
							  					<h1>
							  						Login
							  					</h1>
							  				</center>
							  				<br>
							  				<br>
							  				<form action="connectivity-login.php" method="POST" enctype="multipart/form-data">
							  					<div class="input-group">
							  						<label class="sr-only" for="email">
							  							Email ID:
							  						</label>
							  						<span class="input-group-addon">
							  							<i class="glyphicon glyphicon-user">
							  							</i>
							  						</span>
							  						<input id="email" type="text"  class="form-control" name="Email_ID"  placeholder="Enter your Email ID">
							  					</div>
							  						<br>
							  					<div class="input-group">
							  							<label class="sr-only" for="password">
							  								Password:
							  							</label>
							  							<span class="input-group-addon">
							  								<i class="glyphicon glyphicon-lock">
							  								</i>
							  							</span>
							  							<input id="password" type="password" class="form-control" name="Password" placeholder="Enter your Password">
							  					</div>
							  						<br>
							  					<div class="checkbox">
							  							<label>
							  								<input type="checkbox">
							  								Remember me
							  							</label>
							  							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  							<a href="password.html">Forgot password?</a>
							  					</div>
							  						<br>
							  						<br>
						  				</div>
						  				<div class="col-sm-4 col-md-4 col-xs-12">
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  		<div class="modal-footer">
						  			<button type="submit" class="btn btn-block btn-primary btn-lg">
						  				Login
						  			</button>
						  			
						  		</form>
						  	</div>
						  </div>
						</div>
					</div>
		
				<li>
						<a href="#" data-toggle="modal" data-target="#myModal">
							<span class="glyphicon glyphicon-user">
							</span>
							Sign Up
						</a>
					</li>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
	              				<div class="modal-header">
	              					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              						&times;
	              					</button>
	              					<h4 class="modal-title" id="myModal">
	              						Sign Up
	              					</h4>
	              				</div>
	              				<div class="modal-body">
	              					<div class="container">
										<div class="row">
	  										<div class="col-sm-1 col-md-1 col-xs-3">
	  										</div>
											<div class="col-sm-4 col-md-4 col-xs-12">
												<center>
													<h1>
														Sign Up
													</h1>
												</center>
												<br>
												<br>
											<form name="signupform" id="signupform" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()" action="connectivity-reg.php">
			    	<div class="form-group">
    					<label class="sr-only" for="FirstName">Firstname:</label>
    					<input type="text"  class="form-control " placeholder="Enter Firstname" name="FirstName" required >
  					</div>
    					<br>
  					<div class="form-group">
    					<label class="sr-only" for="LastName">Lastname:</label>
    					<input type="text"  class="form-control " placeholder="Enter Lastname" name="LastName" required >
  					</div>
    					<br>
  					<div class="form-group">
    					<label class="sr-only" for="Email_ID">Email ID:</label>
    					<input type="email"  class="form-control " placeholder="Enter Email ID" name="Email_ID" required >
  					</div>
    					<br>
  					<div class="form-group">
    					<label class="sr-only" for="Password">Enter Password:</label>
    					<input type="password"  class="form-control " placeholder="Enter Password" name="Password" required >
  					</div>
    					<br>
  					<div class="form-group">
    					<label class="sr-only" for="ConfirmPassword">Confirm Password:</label>
    					<input type="password"  class="form-control " placeholder="Confirm Password" name="ConfirmPassword" required >
  					</div>
    					<br>
  						<label class="sr-only" for="Gender">Gender:</label>
  						<label class="radio-inline"><input type="radio" name="Gender">Male</label>
						<label class="radio-inline"><input type="radio" name="Gender">Female</label>
						<label class="radio-inline"><input type="radio" name="Gender">Other</label>
						<br><br>
					<div class="form-group">
						<input type="text" name="DateOfBirth"  class="form-control  " placeholder="Enter your Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" required>
					</div>	
						<br>
					<div class="form-group">
						<select id="country" class="form-control  " placeholder="Enter your Country" name ="Country">
							<option value="" disabled selected hidden>Country</option>
						</select>
						<script language="javascript">populateCountries("country");</script>
					</div>
						<br>
						<label class="sr-only" for="UserType">User Type:</label>
  						<label class="radio-inline"><input type="radio" name="UserType">Student</label>
						<label class="radio-inline"><input type="radio" name="UserType">Faculty</label>
						<label class="radio-inline"><input type="radio" name="UserType">Other</label>		
			    		<br><br>
					<div class="form-group">
					<br>
						<label class="sr-only" for="Semester">Semester:</label>
						<select class="form-control" placeholder="Semester" name="Semester">
						  <option value="" disabled selected hidden>Semester</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>  
						  <option vlaue="8">8</option>
						</select>
							<br>
					<div class="form-group">	
			    		<input type="int" class="form-control  " placeholder="Enter Mobile Num" name="Mobile" required>
			    	</div>
			    		<br><br>
			    	<button type="submit" class="btn btn-block btn-primary btn-lg">Sign up</button>
			    </form>	
		    									
	       						</div>
	       					</div>
	       				</div>
	       			</div>
					
		<!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Signup</button>
</a></li>-->
      </ul>
    </div>
  </div>
</nav>

<h4 class="heading" contenteditable data-heading="Piece of Cake">The FleaBook</h4>

 <div class="bac">

  <img class="mySlides" src="1.jpg">
  <img class="mySlides" src="2.jpg">
  <img class="mySlides" src="3.jpg">
</div>











<!--
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="connectivity-login.php" method="POST" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
<br><br>

<h1><center>Sign In</center></h1>
<br>
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
		<br>
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        <br><br><br>
      <button type="submit" class="signinButton" style="width=200px">Login</button>
	  <br>
      <label>
        <input type="checkbox" checked="checked"> Remember me
      </label>
    </div>

  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="connectivity-login.php" method="POST" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
<br><br>

<h1><center>Sign Up</center></h1>
<br>
    <div class="container">
      
    					<label class="sr-only" for="FirstName">Firstname:</label>
    					<input type="text"  class="form-control " placeholder="Enter Firstname" name="FirstName" required >
  					
    					<br>
  					
    					<label class="sr-only" for="LastName">Lastname:</label>
    					<input type="text"  class="form-control " placeholder="Enter Lastname" name="LastName" required >
  					
    					<br>
  					
    					<label class="sr-only" for="Email_ID">Email ID:</label>
    					<input type="email"  class="form-control " placeholder="Enter Email ID" name="Email_ID" required >
  					
    					<br>
  					
    					<label class="sr-only" for="Password">Enter Password:</label>
    					<input type="password"  class="form-control " placeholder="Enter Password" name="Password" required >
  					
    					<br>
  					
    					<label class="sr-only" for="ConfirmPassword">Confirm Password:</label>
    					<input type="password"  class="form-control " placeholder="Confirm Password" name="ConfirmPassword" required >
  					
    					<br>
  						<label class="sr-only" for="Gender">Gender:</label>
  						<label class="radio-inline"><input type="radio" name="Gender">Male</label>
						<label class="radio-inline"><input type="radio" name="Gender">Female</label>
						<label class="radio-inline"><input type="radio" name="Gender">Other</label>
						<br><br>
					
						<input type="text" name="DateOfBirth"  class="form-control  " placeholder="Enter your Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" required>
						
						<br>
					
						<select id="country" class="form-control  " placeholder="Enter your Country" name ="Country">
							<option value="" disabled selected hidden>Country</option>
						</select>
						<script language="javascript">populateCountries("country");</script>
					
						<br>
						<label class="sr-only" for="UserType">User Type:</label>
  						<label class="radio-inline"><input type="radio" name="UserType">Student</label>
						<label class="radio-inline"><input type="radio" name="UserType">Faculty</label>
						<label class="radio-inline"><input type="radio" name="UserType">Other</label>		
			    		<br><br>
					
					<br>
						<label class="sr-only" for="Semester">Semester:</label>
						<select class="form-control" placeholder="Semester" name="Semester">
						  <option value="" disabled selected hidden>Semester</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>  
						  <option vlaue="8">8</option>
						</select>
							<br>
						
			    		<input type="int" class="form-control  " placeholder="Enter Mobile Num" name="Mobile" required>
			    	
			    		<br><br>
			    	<button type="submit" class="btn btn-block btn-primar
    </div>

  </form>
</div>


<!--<div id="id02" class="modal">
<form name="signupform" id="signupform" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()" action="connectivity-reg.php">
			    	<div class="form-group">
    					<label class="sr-only" for="FirstName">Firstname:</label>
    					<input type="text"  class="form-control " placeholder="Enter Firstname" name="FirstName" required >
  					</div>
    					<br>
  					<div class="form-group">
    					<label class="sr-only" for="LastName">Lastname:</label>
    					<input type="text"  class="form-control " placeholder="Enter Lastname" name="LastName" required >
  					</div>
    					<br>
  					<div class="form-group">
    					<label class="sr-only" for="Email_ID">Email ID:</label>
    					<input type="email"  class="form-control " placeholder="Enter Email ID" name="Email_ID" required >
  					</div>
    					<br>
  					<div class="form-group">
    					<label class="sr-only" for="Password">Enter Password:</label>
    					<input type="password"  class="form-control " placeholder="Enter Password" name="Password" required >
  					</div>
    					<br>
  					<div class="form-group">
    					<label class="sr-only" for="ConfirmPassword">Confirm Password:</label>
    					<input type="password"  class="form-control " placeholder="Confirm Password" name="ConfirmPassword" required >
  					</div>
    					<br>
  						<label class="sr-only" for="Gender">Gender:</label>
  						<label class="radio-inline"><input type="radio" name="Gender">Male</label>
						<label class="radio-inline"><input type="radio" name="Gender">Female</label>
						<label class="radio-inline"><input type="radio" name="Gender">Other</label>
						<br><br>
					<div class="form-group">
						<input type="text" name="DateOfBirth"  class="form-control  " placeholder="Enter your Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" required>
					</div>	
						<br>
					<div class="form-group">
						<select id="country" class="form-control  " placeholder="Enter your Country" name ="Country">
							<option value="" disabled selected hidden>Country</option>
						</select>
						<script language="javascript">populateCountries("country");</script>
					</div>
						<br>
						<label class="sr-only" for="UserType">User Type:</label>
  						<label class="radio-inline"><input type="radio" name="UserType">Student</label>
						<label class="radio-inline"><input type="radio" name="UserType">Faculty</label>
						<label class="radio-inline"><input type="radio" name="UserType">Other</label>		
			    		<br><br>
					<div class="form-group">
					<br>
						<label class="sr-only" for="Semester">Semester:</label>
						<select class="form-control" placeholder="Semester" name="Semester">
						  <option value="" disabled selected hidden>Semester</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						  <option value="5">5</option>
						  <option value="6">6</option>
						  <option value="7">7</option>  
						  <option vlaue="8">8</option>
						</select>
							<br>
					<div class="form-group">	
			    		<input type="int" class="form-control  " placeholder="Enter Mobile Num" name="Mobile" required>
			    	</div>
			    		<br><br>
			    	<button type="submit" class="btn btn-block btn-primary btn-lg">Sign up</button>
			    </form>	

</div>
-->














<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}


var h1 = document.querySelector("h1");

h1.addEventListener("input", function() {
  this.setAttribute("data-heading", this.innerText);
});




// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



</script>








<div class="books-slider">
<div class="inner">
			<div class="book1">
			<div class="cover">
				<div class="cover-picture">
					<a href="https://glose.com/book/things-a-little-bird-told-me">
						<img src="https://pike.glose.com/e3AscY4Pap/6b742cdaffd9959cd8d71d7361c23282970ab275/WyJodHRwczpcL1wvc3RvcmFnZS5nb29nbGVhcGlzLmNvbVwvczQtYnVja2V0XC9jaXRhZGVsXC81MzgzMDEzNDE2MGRjMzBmNmY3NTNkNTAtN2RhOTMwYWE4MmZjMTlkNGEyYjIzMGJmNjY5OGFhOGMuanBnP0dvb2dsZUFjY2Vzc0lkPXM0LXJlYWFhZCU0MGdsb3NlLXBsYXRmb3JtLmlhbS5nc2VydmljZWFjY291bnQuY29tJkV4cGlyZXM9MzI1MDM2ODAwMDAmU2lnbmF0dXJlPU1XTGtoWFFBZGpSVUtnJTJGMG0ySCUyQlhTdXZOT3RXMmNnQWs1SFB4OHdPQ2NCdWk1ZzV4OTF0bDJab3JhdlRnaHdlMHFRMU5HUkd3SWVqQ1NlNDhNeWdWYkZEZ1hiS2ZOSThPYURzYVR0em8lMkJmaGhFakN2ZXJYeGFJQXlwa3o4cSUyRkcybGklMkJiNHolMkIwV0NsVHRwbWFlODc3bURUS1dsdUdPaCUyQlQlMkZYV0ViUHl4SWpFY0JwVEtzcnRJM2tTTjZvdVQ5bW5TcTBwTkhIeTklMkYlMkJXRFRyR2l4MTVwQzNKZEJsUUpYNkdrRFE4eGh5d3d1b2dkOUZrRVFWb2daNDNSMVNhMzVBMVZMelJ5VWdrS0NLZHolMkI1ckZlSHBodjd3Y29VVjBqSk1XOHJEalJKMjdtWjZkMzNIREQxWGdIUVpPd054cHpaSHBsRkF1MVJCTzdneWtKeXRNNkZTV3clM0QlM0QiLFsic2l6ZSIseyJoZWlnaHQiOjUwMH1dXQ==">
					</a>
				</div>
			</div>
			<div class="details">
				<div class="price">
																<a class="btn btn-price" href="https://glose.com/book/things-a-little-bird-told-me">
							$9.99
						</a>
									</div>
				<div class="stats">
					<div>24 readers</div>
					<div>74 notes</div>
				</div>
			</div>
		</div>
			<div class="book2">
			<div class="cover">
				<div class="cover-picture">
					<a href="https://glose.com/book/the-hard-thing-about-hard-things">
						<img src="https://pike.glose.com/e3AscY4Pap/0c3bfb81ab5b9efbb0ae8d08803fecd46f2deb4b/WyJodHRwczpcL1wvc3RvcmFnZS5nb29nbGVhcGlzLmNvbVwvczQtYnVja2V0XC9jaXRhZGVsXC81NDA5YmFmMTE2MGRjMzQ4NTlmYTQ5NTYtYzMwZTFhMmM1Y2I4Y2E4ZDBiOTE4MDA2Y2U4MmQyZjcuanBnP0dvb2dsZUFjY2Vzc0lkPXM0LXJlYWFhZCU0MGdsb3NlLXBsYXRmb3JtLmlhbS5nc2VydmljZWFjY291bnQuY29tJkV4cGlyZXM9MzI1MDM2ODAwMDAmU2lnbmF0dXJlPUJBdmkzQU1zZ2FDN0ZtUE9HZWRWN1pRRSUyQkNqVzlJcVZxR0RVUUZydFJKWnVCNVJuek8welpPM3ZNM243TG1Cd2JZNE5BRjNiUDElMkJrNngzRVRIeE9pbEtnY3JjaDlnOUc2dmRhR3pualVGJTJGMFNHVHpTZlhpaVd2MUNBJTJCcjFYTHU2dVFGRlAxeXQlMkJKRzNUM1RCanNjcHNqRUxkNEdpeGRQYlIwNFElMkZGYjJXUmdEJTJCM0xGRENYRDFXZiUyQm5pUXdZSFdTeDZlbjYyQ2x4JTJCWDAydVZycGFmUWk0cmNCck1OayUyQjdhNjVSdSUyRkNncGlQOE9QMnRPdFlTWWQ4d2s3bGV5VnkxYnVvUEY1JTJGTUJPZ0lvVEpKUnJRSiUyQkJ2MjZYaFhTWVRxQllZUzI4OXZkYTdQUm1vUE9FR2lnJTJGakx3OU5yTWk1Q2tSVTZpQmIlMkJOd0YzdXJsZXlYV29KUSUzRCUzRCIsWyJzaXplIix7ImhlaWdodCI6NTAwfV1d">
					</a>
				</div>
			</div>
			<div class="details">
				<div class="price">
																<a class="btn btn-price" href="https://glose.com/book/the-hard-thing-about-hard-things">
							$14.99
						</a>
									</div>
				<div class="stats">
					<div>82 readers</div>
					<div>856 notes</div>
				</div>
			</div>
		</div>
			<div class="book3">
			<div class="cover">
				<div class="cover-picture">
					<a href="https://glose.com/book/dracula">
						<img src="https://pike.glose.com/e3AscY4Pap/26f9809b3687daef3e7c020f5d00e939701f6256/WyJodHRwczpcL1wvc3RvcmFnZS5nb29nbGVhcGlzLmNvbVwvczQtYnVja2V0XC9jaXRhZGVsXC81MzY3YTg3ZmU5MTQzYTE1ZDFmNDM3ZTgtODlhZTJiODkyMGU5NjUyMTc5NDBhZWYyYmM2ZjQzMDMuanBnP0dvb2dsZUFjY2Vzc0lkPXM0LXJlYWFhZCU0MGdsb3NlLXBsYXRmb3JtLmlhbS5nc2VydmljZWFjY291bnQuY29tJkV4cGlyZXM9MzI1MDM2ODAwMDAmU2lnbmF0dXJlPWJVY09jbndQc1dHdk8lMkJhNkJKUkR4enE4eCUyRktiQVd0JTJGUjg4RlkwTGgwRVRDWjlTNmZHJTJGVloweG9jWGQ5NVdCeHJFbXJOV2htRzRsVTFNVmc4cDFGcW4wOVZyJTJGcG1GRnNQNFpnb3ElMkJqbE9OMTNUeWdJRWxxT1Rkc3QwcVp6NkpoJTJGYTVTRFVoQWZQRnVYN3JENzRqJTJCR3F5NlY4NWxEaXklMkI3MHhJYVdyWFB2QkwlMkZMJTJGbzZxcVRNN0Z1MXFYQjc2TnFUVE43UkUlMkZQYVY2Q2NqdUtRdzRib09SdWt3ME1CRkxRc04lMkZVRVQ5QVhXWVZTUmhINSUyRnNVM0I0eXFtVU9lSEgxeU1GJTJCOVVzQXhHdEtsNXo4QkE1SDkzR24yYVNjMmxVTXluM2VRU2ZqejFLczFNQjJXQUJYeU5LRUpHZExzWTZVNUZBaWdneUluRUJmY25UUVZFbUh0QSUzRCUzRCIsWyJzaXplIix7ImhlaWdodCI6NTAwfV1d">
					</a>
				</div>
			</div>
			<div class="details">
				<div class="price">
																<a class="btn btn-price" href="https://glose.com/book/dracula">
							FREE
						</a>
									</div>
				<div class="stats">
					<div>7361 readers</div>
					<div>352 notes</div>
				</div>
			</div>
		</div>
			<div class="book4">
			<div class="cover">
				<div class="cover-picture">
					<a href="https://glose.com/book/the-launch-pad">
						<img src="https://pike.glose.com/e3AscY4Pap/0da888475640a1c1a6918e2b94d99075ccc555a4/WyJodHRwczpcL1wvc3RvcmFnZS5nb29nbGVhcGlzLmNvbVwvczQtYnVja2V0XC9jaXRhZGVsXC81NDRhMWYxNTc3NTgzZDEwMzVmOGRmNTUtMzg1NGNhOGQ3MTliN2ZiMzMxNDlhNDAzZGY3NjA3MjUuanBnP0dvb2dsZUFjY2Vzc0lkPXM0LXJlYWFhZCU0MGdsb3NlLXBsYXRmb3JtLmlhbS5nc2VydmljZWFjY291bnQuY29tJkV4cGlyZXM9MzI1MDM2ODAwMDAmU2lnbmF0dXJlPW5oVnFXM3FRME81bG4lMkZlRkw4M1Z5NTk5UTlEWEtSYTFHMlFFNnhuSjVsMnl2QzBuTEs4RWEwTSUyRmpiRCUyQllmcmZxV0FCUHNVS1VDQjdnU2toVkU5SG1FSFF2ZlZ2WGV5Mmk0enlmdkpuMXVWRVhTcVQlMkZmNWtkTFdTY0lUNjVjMjdRcE8wOFJlVzNSTEFkNXVKVXo4OEo3NnY5Y1RKZ3FzY2I3WERPVDJ6ZjRENXVaM2tOZ2UwdmZpemxVTU9ISWhTZ3J6OGsyeWxNdE9lT2lEM0VNZ1QyQlFRMWlaMTJFZ3lHQ1I0aFJ2ZER5VVduQU1pdDY5OWglMkZUZXZxeHVvV04xYjUzcFR6ZEptQ21DbmMxSDRkSXRIWEx0OSUyRmRLa2N0JTJGd2FRSE55NnlBWUhsaTIzRUlwbElRZFYzejkwbW0wRXhyMWpsckVtdTl0SEt5Y1dSVkFkYUxBJTNEJTNEIixbInNpemUiLHsiaGVpZ2h0Ijo1MDB9XV0=">
					</a>
				</div>
			</div>
			<div class="details">
				<div class="price">
																<a class="btn btn-price" href="https://glose.com/book/the-launch-pad">
							£4.99
						</a>
									</div>
				<div class="stats">
					<div>26 readers</div>
					<div>38 notes</div>
				</div>
			</div>
		</div>
			<div class="book5">
			<div class="cover">
				<div class="cover-picture">
					<a href="https://glose.com/book/steve-jobs">
						<img src="https://pike.glose.com/e3AscY4Pap/3a6b3ae1275505e2fa2ac3f4ff239b9361bc9689/WyJodHRwczpcL1wvc3RvcmFnZS5nb29nbGVhcGlzLmNvbVwvczQtYnVja2V0XC9oYXJyZW5oYWxcLzk3ODA3NDgxMzEzMjctNDY3YmFiNjAtZGY2Yi00OWZlLWE1NWUtZGVhNmZjOTk4MjBjLmpwZz9Hb29nbGVBY2Nlc3NJZD1zNC1yZWFhYWQlNDBnbG9zZS1wbGF0Zm9ybS5pYW0uZ3NlcnZpY2VhY2NvdW50LmNvbSZFeHBpcmVzPTMyNTAzNjgwMDAwJlNpZ25hdHVyZT1ibFlRTlkwbEg1OE1iTWlvRlp0cDRGcG11TkRtbGpTVyUyRm9OJTJGNDVGR1I1QlBETVE2TGQlMkZmOXlmQ1FHaHBJMFZRclJEOHdVNUZ4YkppOTBXV3JKUGEyVFBxY2xTalUlMkZBNlVrZzdlRHQySiUyQld6b1hTSFpyZmlzb0s1MlptRDVjNTB5ck05VTFwNmxzY3R0d0NHSm5tWjdtSnFMb2hmVU5wV0x3MHRsYjFVVEo0TkpCQVZSMG9OOUp4YVVyZmUyaGRhU3g0b0Y4eWlHcVZKSkVUdEVxJTJCJTJCWHdPa25hWjd3WFBRdSUyRnRtbUpSMTFSSlJBVzZDS0RrJTJCaWx0clljcXlWaERYRFBrYmtEQzZ6ZWZKWjFxOER4cXoyaVdXY0FBYnQxQzAyYnprNXNMVWNoQ3JPMXNIbUd6R2lydDZLR0wlMkZQRmI3bW1JOWNlZiUyQkJZNGtNbzI4Wmk1JTJCR3clM0QlM0QiLFsic2l6ZSIseyJoZWlnaHQiOjUwMH1dXQ==">
					</a>
				</div>
			</div>
			<div class="details">
				<div class="price">
																<a class="btn btn-price" href="https://glose.com/book/steve-jobs">
							£5.49
						</a>
									</div>
				<div class="stats">
					<div>208 readers</div>
					<div>1375 notes</div>
				</div>
			</div>
		</div>
			<div class="book6">
			<div class="cover">
				<div class="cover-picture">
					<a href="https://glose.com/book/gone-girl">
						<img src="https://pike.glose.com/e3AscY4Pap/12c400f0d0b816bd6f479c242c6002fa06305cbb/WyJodHRwczpcL1wvc3RvcmFnZS5nb29nbGVhcGlzLmNvbVwvczQtYnVja2V0XC9oYXJyZW5oYWxcLzk3ODAyOTc4NTk0MDYtMmNkZThkMjYtYTIwMS00NzNhLWI3MGEtZDMxNjYwODNmMzFkLmpwZz9Hb29nbGVBY2Nlc3NJZD1zNC1yZWFhYWQlNDBnbG9zZS1wbGF0Zm9ybS5pYW0uZ3NlcnZpY2VhY2NvdW50LmNvbSZFeHBpcmVzPTMyNTAzNjgwMDAwJlNpZ25hdHVyZT1GU21vRElQaFF5Y1BhRnJrd1FuYWtVd0ZvZW05ZmJjbTd0bCUyRlVKOWJYbGw5QmdUWk5ERCUyQmNMeXhMTFRSTEpmQk9UM3JHUXJvOXE0VXB1bDBDRnNBTFE3VjJ0bHZDayUyRlVndmgzbU91WjRUMnBVdllhWjlIcjZha3MzS0pjbnBUQVlRNlg1U3h3R2lwbUkwN3p1R0t4aWExQ1k3U1FXbk9saHU5MTNiUjg3eHBZYjhjb2RPTCUyQjljcDl6MThmTFZqQlVPUjBqRXJmJTJCSlhnWXIxaDRvTVF3QnRjazJDdmVwV0RKVzVPWjlnbHNxMkRJalJQRmZyYVdIc3pxTkZlJTJGSUozM1FxY3RhVnB2TFM5c3M1Q0R5WCUyRm5DOFRPTE42Y0tLU3BkckxsZXFaNTFWMEJMTEpnN0l2JTJGb1ROVEVwb3N2dW9MUTRvQThySkJpcXk3anR6b01HMkR3JTNEJTNEIixbInNpemUiLHsiaGVpZ2h0Ijo1MDB9XV0=">
					</a>
				</div>
			</div>
			<div class="details">
				<div class="price">
																<a class="btn btn-price" href="https://glose.com/book/gone-girl">
							£5.99
						</a>
									</div>
				<div class="stats">
					<div>57 readers</div>
					<div>53 notes</div>
				</div>
			</div>
		</div>
			<div class="book7">
			<div class="cover">
				<div class="cover-picture">
					<a href="https://glose.com/book/walden">
						<img src="https://pike.glose.com/e3AscY4Pap/dec9e03053d3d0c58bcfb01f528453c895d97f3b/WyJodHRwczpcL1wvc3RvcmFnZS5nb29nbGVhcGlzLmNvbVwvczQtYnVja2V0XC9jaXRhZGVsXC81MzYxMjI5M2Y5ODk4M2QyMzc3Zjg3NzUtMTZmM2NjYzkyMDcwY2FhYTE3OTdlODAwZTkwYjdhYjUuanBnP0dvb2dsZUFjY2Vzc0lkPXM0LXJlYWFhZCU0MGdsb3NlLXBsYXRmb3JtLmlhbS5nc2VydmljZWFjY291bnQuY29tJkV4cGlyZXM9MzI1MDM2ODAwMDAmU2lnbmF0dXJlPXN5cEklMkZHbXVMUTI0UmhzUnpxeWJ6R0NrUTgzbURXV09MOFlja3kxVWVxVjVNR0R0cVFnNGluOWRUbklxSDBWblRjd0pqeWpzRHM4YTdyVjgzQlNaWEd1bVczaDZMWG1zSG02eCUyQjlKNjE2c2JlZTZpMWRMckxIczd1dDJDSlF4dUhsS1BBUU5BVDh3N1pwRWxMR3JER2VIcG5JRlVPUzA4V1FUTjlReVVvM3c4ZndkU1Z0MU1WJTJGbGhlVEp1RkpQTWo5cDJjb0xnSFU1akhSWSUyRkxoVDNNZGJiM1VlTmxTZlhQRG84QUdmWUR4bnFhNUR0ODNESkNsVXUyY0p5bjk3ODVpUDNTdU45cm5qJTJCdFVaRUxCZDFvQnFydTFNY2RGTEIlMkI1WDE5VmhtMmpuZkQ5bjdOdG4lMkZLc0tiRDZlS25iY1ZTNTRwTCUyQms1V29JNWJ5MW5henYlMkZSQSUzRCUzRCIsWyJzaXplIix7ImhlaWdodCI6NTAwfV1d">
					</a>
				</div>
			</div>
			<div class="details">
				<div class="price">
																<a class="btn btn-price" href="https://glose.com/book/walden">
							FREE
						</a>
									</div>
				<div class="stats">
					<div>2705 readers</div>
					<div>1098 notes</div>
				</div>
			</div>
		</div>
			<div class="book8">
			<div class="cover">
				<div class="cover-picture">
					<a href="https://glose.com/book/no-place-to-hide-2">
						<img src="https://pike.glose.com/e3AscY4Pap/57847cd23a9c17b8ac20a41413564d9deaec6632/WyJodHRwczpcL1wvc3RvcmFnZS5nb29nbGVhcGlzLmNvbVwvczQtYnVja2V0XC9oYXJyZW5oYWxcLzk3ODE2Mjc3OTA3NDEtYTI0ZGE4ZWYtZGNjOS00Mzg3LWJmZmQtYTAwZjcxNTExMTEzLmpwZz9Hb29nbGVBY2Nlc3NJZD1zNC1yZWFhYWQlNDBnbG9zZS1wbGF0Zm9ybS5pYW0uZ3NlcnZpY2VhY2NvdW50LmNvbSZFeHBpcmVzPTMyNTAzNjgwMDAwJlNpZ25hdHVyZT1iTm93R2FYcVcydURnSnNCTU5ubjd1UG5sOHdvTFYxN2l4VjlmT2tPJTJGQU9ka09vbThmVUN2cHRvb0VIUUJYdU1aa2VIYXIyNHFnQXo1RlUyVDRjS3RsdSUyQmR3SGxsb3RWNTRITlNYdkVrVnF1JTJGTyUyRkljZmhhT2I1QmF1WG1IMzgwUVVEa0lKSVk4OFlDV3dOZURmVzVTcldGbTJDWGg4MUpmQlJ3Q1BTbHNZbWF5dzJIWmRvQzVVa3FPRiUyQklSM0JjT3ZNZDZ2RWFMRUlmUDBCWmw2dWw4OGc4S1I4JTJCd3pqS2c0TnVhRFB6SENFZ2JhYXBtckF1MUxFZzVyTGNtM3hLZU1ESk9penJmM0pobHBHVW84ZWU2ZkplcmxvWE1NTDIzWlNZMHdrZTFWVk1QN1RjcHdFNHd6NkVUQ2RuZzJNZ2tvWlBGWjMlMkJocCUyRm5HTnlzNGU2dVZ3JTNEJTNEIixbInNpemUiLHsiaGVpZ2h0Ijo1MDB9XV0=">
					</a>
				</div>
			</div>
			<div class="details">
				<div class="price">
																<a class="btn btn-price" href="https://glose.com/book/no-place-to-hide-2">
							$8.50
						</a>
									</div>
				<div class="stats">
					<div>8 readers</div>
					<div>113 notes</div>
				</div>
			</div>
		</div>
			
													
			
	</div>
	</div>
		
	</div>




















</body>
</html>
