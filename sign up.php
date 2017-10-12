<!-- REgistrationForm Basic FreeBie --> 
<!DOCTYPE html>
<html>

<head>
<style>
.error {color: #FF0000;}
</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registration Form</title>

	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


	<link rel="stylesheet" href="assets.css">
	<link rel="stylesheet" href="assets2SS.css">

</head>
<body>
<?php

include("connection.php");
	
	echo "Hi";
	$nameErr = $emailErr = $passwordErr = "";
	$name = $email =  $password = "";
	
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  }
  else 
  {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
	{
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
      $emailErr = "Invalid email format"; 
    }
  }
  
  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
  }
  else 
  {
    $password = test_input($_POST["password"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9 ]*\w{3,20}$/",$password)) 
	{
      $passwordErr = "Please enter valid password"; 
    }
  }
    
  
}




$query = mysqli_query($con,"INSERT INTO users (name,email,password) VALUES('$name', '$email', '$password')");

if($query){
	echo "Success! <br />"; 
}
else
{
	echo "Error : ".mysqli_error($con);
}
	mysqli_close($con);

?>
    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="post" action="#">

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
					<p><span class="error">* required field.</span></p>

                        <label>
                            <span>Name</span>
                            <input type="text" name="name">
							  <span class="error">* <?php echo $nameErr;?></span>

                        </label>
                    </div>

                    <div class="form-row">
						<p><span class="error">* .</span></p>

                        <label>
                            <span>Email</span>
                            <input type="email" name="email">
														  <span class="error">* <?php echo $emailErr;?></span>

                        </label>
                    </div>

                    <div class="form-row">
											<p><span class="error">* .</span></p>

                        <label>
                            <span>Password</span>
                            <input type="password" name="password">
																					  <span class="error">* <?php echo $passwordErr;?></span>

                        </label>
                    </div>

                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit" name="Register">Register</button>
                    </div>

                </div>

                <a href="login1.php" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>

            </div>

            

        </form>

    </div>




</body>

</html>

