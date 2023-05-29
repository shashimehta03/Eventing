<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="style1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<span style="color:blue;">E</span><span style="font-weight:100;">venting</span>
		<h2>Plan.Book.Participate </h2>
		
		
		</div>
	</div>
	
	
		<div class="right">
		<h5>Login</h5>
		<p>Don't have an account? <a href="signup.html">Create Your Account</a> it takes less than a minute</p>
		<div class="inputs">
			<input type="text" placeholder="user name" id="user">
			<br>
			<input type="password" placeholder="password" id="pass">
		</div>
			
			<br><br>
			
		<div class="remember-me--forget-password">
				<!-- Angular -->
	<label>
		<input type="checkbox" name="item" checked/>
		<span class="text-checkbox">Remember me</span>
	</label>
			
		</div>
			
			<br>
			<button onclick="checkpassid()"> Login</button>
			<span>
			<a href="Event_Management_System/admin/login.php"><button> Admin</button> </a></span>
			
	</div>
	
</div>
<!-- partial -->
  
</body>


<script>
function checkpassid() {
    var ss = document.getElementById("user").value;
    var ss2 = document.getElementById("pass").value;
    console.log(typeof(ss))
    if (ss === "Aryan") {
      if (ss2 === "123456") {
        document.getElementById("pass").value= "";
        window.open("Event_Management_System/index.html", "_blank");
      }
      else {
        document.getElementById("pass").value= "";
        alert("Wrong UserName or password");
      }
    }
    else {
      document.getElementById("pass").value= "";
      alert("Wrong UserName or password");
    }
  }
  </script>
</html>

