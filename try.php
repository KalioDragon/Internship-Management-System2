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



        #mysql_connect("localhost","root","")or die("Not Connected");
        #mysql_select_db("Internship") or die("No DB Found");
        $info=mysqli_query($con,"SELECT C_name,c_info,c_criteria FROM Company WHERE A_id=9");





while($row = mysqli_fetch_array($info))
{

echo "<h1>"."Company name :". $row['C_name'] . "</h1>";
echo "<h3>" .$row['c_info'] ."</h3>";
echo "<h3>" . "Company criteria:".$row['c_criteria'] . "</h3>";
 
echo "<form>";
echo "<form action='try.php' method='post'>";
echo "<input type='submit' name='Apply_m' value='Apply' >";
echo "</form>";  

if(isset($_POST['Apply_m'])){
header("Location: logind.php");
exit;
}

}


mysqli_close($con);



?>
</body>

</html>


