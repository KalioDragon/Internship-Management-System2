 <?php 
ini_set('display_errors', 0);
error_reporting( E_WARNING | E_PARSE);  
    	         session_start();  
		 $user=$_SESSION['sess_user'];
		 $aid=$_SESSION['aid'];
		 $name=$_SESSION['cname'];
		 $aida=$_SESSION['aida'];
		 $namea=$_SESSION['cnamea'];
		 $aidam=$_SESSION['aidam'];
		 $nameam=$_SESSION['cnameam'];
		 $aidan=$_SESSION['aidan'];
		 $namean=$_SESSION['cnamean'];
		 $aiddmp=$_SESSION['aiddmp'];
		 $namedmp=$_SESSION['cnamedmp'];
		 $aidgame=$_SESSION['aidgame'];
		 $namegame=$_SESSION['cnamegame'];
		 $aidgraphic=$_SESSION['aidgraphic'];
		 $namegraphic=$_SESSION['cnamegraphic'];
		 $aidiot=$_SESSION['aidiot'];
		 $nameiot=$_SESSION['cnameiot'];
		 $aidmw=$_SESSION['aidmw'];
		 $namemw=$_SESSION['cnamemw'];
	
    ?>  
  
    <!doctype html>  
    <html>  
    <head>  
    <title>Welcome</title>                                
    </head>  
    <body>  
    <h3>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h3>  
   	         	
      	              
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
echo'   ';
}	

	$result= mysqli_query($conn,"select percentage from Student where Email='$user'");

	while($row = mysqli_fetch_array($result))
	{
	
	if($row['percentage'])
	{
	$percentage=$row['percentage'];
	echo "Your Percentage is $percentage "."<br>";

	}
	}

	
		if($name){
			$result= mysqli_query($conn,"select c_criteria from Company where C_name='$name'");
			while($row = mysqli_fetch_array($result))
			{
	
			if($row['c_criteria'])
			{
			$criteria=$row['c_criteria'];
			echo "criteria is $criteria";
			}
			}
			if($percentage>=$criteria)
			{ echo "<br>"."You are selected for quiz"."<br>";
			echo '<br>'.'<br>'. '<a href="quiz/quiz.php">Play Quiz!!!!</a>';
			}
			else{
			echo"You are not selected"."<br>";
			}
		
		}

		if($namea){
			$result= mysqli_query($conn,"select c_criteria from Company where C_name='$namea'");
			while($row = mysqli_fetch_array($result))
			{
	
			if($row['c_criteria'])
			{
			$criteria=$row['c_criteria'];
			echo "criteria is $criteria"."<br>";
			}
			}
			if($percentage>=$criteria)
			{ echo"<br>"."You are selected for quiz"."<br>";
			echo '<br>'.'<br>'. '<a href="quiz/quiz.php">Play Quiz!!!!</a>';
			}
			else{
			echo"You are not selected"."<br>";
			}
		
		}

		if($nameam){
			$result= mysqli_query($conn,"select c_criteria from Company where C_name='$nameam'");
			while($row = mysqli_fetch_array($result))
			{
	
			if($row['c_criteria'])
			{
			$criteria=$row['c_criteria'];
			echo "criteria is $criteria"."<br>";
			}
			}
			if($percentage>=$criteria)
			{ echo"<br>"."You are selected for quiz"."<br>";
			echo '<br>'.'<br>'. '<a href="quiz/quiz.php">Play Quiz!!!!</a>';
			}
			else{
			echo"You are not selected"."<br>";
			}
		
		}

		if($namean){
			$result= mysqli_query($conn,"select c_criteria from Company where C_name='$namean'");
			while($row = mysqli_fetch_array($result))
			{
	
			if($row['c_criteria'])
			{
			$criteria=$row['c_criteria'];
			echo "criteria is $criteria"."<br>";
			}
			}
			if($percentage>=$criteria)
			{ echo"<br>"."You are selected for quiz"."<br>";
			echo '<br>'.'<br>'. '<a href="quiz/quiz.php">Play Quiz!!!!</a>';
			}
			else{
			echo"You are not selected"."<br>";
			}
		
		}

		if($namedmp){
			$result= mysqli_query($conn,"select c_criteria from Company where C_name='$namedmp'");
			while($row = mysqli_fetch_array($result))
			{
	
			if($row['c_criteria'])
			{
			$criteria=$row['c_criteria'];
			echo "criteria is $criteria"."<br>";
			}
			}
			if($percentage>=$criteria)
			{ echo"<br>"."You are selected for quiz"."<br>";
			echo '<br>'.'<br>'. '<a href="quiz/quiz.php">Play Quiz!!!!</a>';
			}
			else{
			echo"You are not selected"."<br>";
			}
		
		}

		if($namegame){
			$result= mysqli_query($conn,"select c_criteria from Company where C_name='$namegame'");
			while($row = mysqli_fetch_array($result))
			{
	
			if($row['c_criteria'])
			{
			$criteria=$row['c_criteria'];
			echo "criteria is $criteria"."<br>";
			}
			}
			if($percentage>=$criteria)
			{ echo"<br>"."You are selected for quiz"."<br>";
			echo '<br>'.'<br>'. '<a href="quiz/quiz.php">Play Quiz!!!!</a>';
			}
			else{
			echo"You are not selected"."<br>";
			}
		
		}

		if($namegraphic){
			$result= mysqli_query($conn,"select c_criteria from Company where C_name='$namegraphic'");
			while($row = mysqli_fetch_array($result))
			{
	
			if($row['c_criteria'])
			{
			$criteria=$row['c_criteria'];
			echo "criteria is $criteria"."<br>";
			}
			}
			if($percentage>=$criteria)
			{ echo"<br>"."You are selected for quiz"."<br>";
			echo '<br>'.'<br>'. '<a href="quiz/quiz.php">Play Quiz!!!!</a>';
			}
			else{
			echo"You are not selected"."<br>";
			}
		
		}

		if($nameiot){
			$result= mysqli_query($conn,"select c_criteria from Company where C_name='$nameiot'");
			while($row = mysqli_fetch_array($result))
			{
	
			if($row['c_criteria'])
			{
			$criteria=$row['c_criteria'];
			echo "criteria is $criteria"."<br>";
			}
			}
			if($percentage>=$criteria)
			{ echo"<br>"."You are selected for quiz"."<br>";
			echo '<br>'.'<br>'. '<a href="quiz/quiz.php">Play Quiz!!!!</a>';
			}
			else{
			echo"You are not selected"."<br>";
			}
		
		}

		if($namemw){
			$result= mysqli_query($conn,"select c_criteria from Company where C_name='$namemw'");
			while($row = mysqli_fetch_array($result))
			{
	
			if($row['c_criteria'])
			{
			$criteria=$row['c_criteria'];
			echo "criteria is $criteria"."<br>";
			}
			}
			if($percentage>=$criteria)
			{ echo"<br>"."You are selected for quiz"."<br>";
			echo '<br>'.'<br>'. '<a href="quiz/quiz.php">Play Quiz!!!!</a>';

			}
			else{
			echo"You are not selected"."<br>";
			}
			
		
		}
			if($user)
	{
		$rollno= mysqli_query($conn,"select Stud_id from Student where Email='$user'");
			while($row = mysqli_fetch_array($rollno))
			{
	
			if($row['Stud_id'])
			{
			$Stud_id=$row['Stud_id'];
			echo "<br>Use this ID as your Roll No. for playing Quiz :$Stud_id";
			}
			}	
	}
		
 ?> 

	
    </body>  
    </html>  
    
