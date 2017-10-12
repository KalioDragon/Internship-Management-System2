   <?php   
    session_start();  
  $email=$_SESSION['email'];
    ?> 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Insert Area of interest selected value in MySQL database</title>
</head>

<body>

<form method="post" action="area_of_interest.php">
 <center>
 <label >Please Select Area of Interest</label><br/><br/><br/>
 <?php echo "welcome $email";?>
 <select name="area_of_interest_names">
 <option>---Select AOI--</option>
 <option value="1">Animation</option>
 <option value="2">Game Development</option>
 <option value="3">Digital Music Production</option>
 <option value="4">Graphic Design</option>
 <option value="5">Mobile And Web User Experience </option>
 
 <option value="6">Accounting</option>
 <option value="7">Advertising and Marketing </option>
 <option value="8">Business Marketing</option>
 <option value="9">Human Resource Management</option>

 <option value="10">Enterpreneurship Acceleration</option>
 <option value="11">Marketing Management</option>
 <option value="12">Networking Administration</option>
 <option value="13">Internet Application and Web Development</option>

 <option value="14">Mobile Applications and Web Development</option>
 <option value="15">Technical Writer</option>
 <option value="16">Database Administrator</option>

 <option value="17">Internet of Things</option>
 <option value="18">Dental Hygiene</option>
 <option value="19">Digital Health</option>
 <option value="20">Medical Device Reprocessing</option>

 <option value="21">Medical Radiation Technology</option>
 
 
 
 
 
 
 </select>
<br/><br/><br/>
 <button type="submit" name="submit" >Submit</button>
 </center>
 </form>

<?php
	//Creating Connection
	$conn=mysqli_connect("localhost","root","","Internship")or die("Not Connected");
      // mysql_select_db("Internship") or die("No DB Found");

	if(! $conn)
{
die('could not connect'.mysqli_error());
}
else
{
echo'connection established';
}	
	echo "wellllllll $email";
	$result= mysqli_query($conn,"select Stud_id from Student where Email='$email'");

	while($row = mysqli_fetch_array($result))
	{
	
	if($row['Stud_id'])
	{
	$stud_id=$row['Stud_id'];
	echo "*************************************iddd is $stud_id";
	}
	}

	
    


	if(isset($_POST["submit"]))
	{
		if(!empty($_POST['area_of_interest_names']))
    	{
 			$AOIName=$_POST["area_of_interest_names"];
			mysql_query("INSERT INTO Allocation (A_id) VALUES ('$AOIName')"); 
			mysql_query("INSERT INTO Allocation (Stud_id) VALES ('$stud_id')");
			echo " Added Successfully ";

		}
	}

	else
	{
		echo "  Please Enter Area Of Interest!!!!!!";

	}

 ?>

</body>
</html>
