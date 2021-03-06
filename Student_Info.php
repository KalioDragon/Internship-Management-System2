<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Student Form</title>
	
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="assets.css">
	<link rel="stylesheet" href="assets_stud_form_basic.css">

</head>

<body>




<?php

include("connection.php");
	
	echo "Hi";
	$nameErr = $mob_noErr = $universityErr =  $emailErr="";
	$name = $qualification= $mobno =  $university = $aoi = $dob = $email = "";
	

	
	function test_input($data) 
	{
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 		$name=$_POST["name"];
		$qualification=$_POST['qualification'];
		$mobno=$_POST["mobno"];
		$university=$_POST["university"];
		$aoi=$_POST["aoi"];
		$dob=$_POST["dob"];
		$email=$_POST["email"];
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
  
  if (empty($_POST["mobno"])) 
  {
    $mob_noErr = "Number is required";
  }
  else 
  {
    if (preg_match('/^[0-9]{10}+$/', $mobno))
	{
	}
	else
	{
    $mob_noErr = "Enter valid Number";
	}
  }
  
 
  if (empty($_POST["university"])) 
  {
    $nameErr = " University Name is required";
  }
  else 
  {
    $university = test_input($_POST["university"]);                                         
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$university)) 
	{
      $universityErr = "Only letters and white space allowed"; 
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
  
  
    
  


$query = mysqli_query($con,"INSERT INTO stud_info (name,qualification,mob_no,university,interest,dob,email) VALUES('$name','$qualification', '$mobno','$university','$aoi','$dob','$email')");

if($query){
	echo "Success! <br />"; 
}
else
{
	echo "Error : ".mysqli_error($con);
}
	mysqli_close($con);
}
?>












	


    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->
        <form class="form-basic" method="post" action="#">

            <div class="form-title-row">
                <h1> Student Information Form </h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Full name</span>
                    <input type="text" name="name">
                </label>
            </div>
			
			<div class="form-row">
                <label>
                    <span>Qualification</span>
                    <select name="qualification">
                        <option>Diploma</option>
                        <option>Bachelor's Degree</option>
                        <option>Master's Degree</option>
                        <option>PostGraduate</option>
						<option>Doctor of Philosophy</option>
                    </select>
                </label>
            </div>
			
			<div class="form-row">
                <label>
                    <span>Contact Number </span>
                    <input type="mobno" name="mobno">
                </label>
            </div>
			
			<div class="form-row">
                <label>
                    <span>University </span>
                    <input type="university" name="university">
                </label>
            </div>
			
			<div class="form-row">
                <label>
                    <span>Area Of Interest</span>
                    <select name="aoi">
                        <option>Academic Upgrading</option>
                        <option>Business Accounting</option>
						<option>Business Marketing</option>
						<option>Business Administration</option>
						<option>Business Analysis Studies</option>
						<option>Business Accounting</option>
						<option>Enterpreneurship</option>
			            <option>Arts,Design and Writing</option>
						<option>Automotive</option>
						<option>Hotel Management</option>
						<option>Fashion Design</option>
			            <option>Hospitality and Tourism</option>
						<option>Networking Administration</option>
						<option>Digital Analytics</option>
						<option>Database Administrator</option>
						<option>Technical Writer</option>
                        <option>Cyber Security</option>
					</select>
                </label>
            </div>

			<div class="form-row">
                <label>
                    <span>Date Of Birth </span>
                    <input type="date" name="dob">
                </label>
            </div>
			
            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="email">
                </label>
            </div>

            
			<div class="form-row">
                <button type="submit">Submit Form</button>
            </div>
        </form>
    </div>
	
</body>
</html>