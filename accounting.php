<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<title> companies </title> 
<body>
 <?php  

        # Establishing connection
	$con=mysqli_connect("localhost","root","","Internship");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  
        $info=mysqli_query($con,"SELECT C_name,c_info,c_criteria,location FROM Company WHERE A_id=7");

	
	if(isset($_POST["Apply"]))
	{
	$cname=$_POST['Apply'];
	$aid=mysqli_query($con,"SELECT A_id from AreaOI WHERE Field_name='Accounting'");		
	while($row = mysqli_fetch_array($aid)){
	if($row['A_id'])
{
		$aid=$row['A_id']; 
		session_start();
		$_SESSION['aida']=$aid;
		$_SESSION['cnamea']=$cname;
	        header("location: logind.php");
	
}

}
		
	
}		


while($row = mysqli_fetch_array($info))
{
$c=$row['C_name'];
echo "<h1>"."Company name :". $row['C_name'] . "</h1>";
echo "<h3>" .$row['c_info'] ."</h3>";
echo "<h3>" . "percentage required to apply:".$row['c_criteria'] ."%". "</h3>";
echo "<h3>" . "Location:".$row['location'] . "</h3>";
echo "<form action='#' method='post'>";
echo "<span>click on button</span><a href='#'><input type='submit' name='Apply' value='$c'></a>" ;
echo "</form>"; 


//if(isset($_POST['Apply'])){
//echo "<a href='logind.php'>LogIn</a>";
//}

}


mysqli_close($con);

?>
</body>

</html>


