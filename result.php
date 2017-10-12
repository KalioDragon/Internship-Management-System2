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


    if(isset($_POST["total_ques"]) && isset($_POST["rollno"]) && isset($_POST["quizID"]))
    {
        if($_POST["total_ques"] != "" && $_POST["rollno"] != "" && $_POST["quizID"] != "")
        {
            require_once("scripts/connect_db.php");
		echo " hiii $user";
         //initializing the variables
            $marks = 0;
            $total_questions = $_POST["total_ques"];
            $roll_no = $_POST["rollno"];
            $quiz_ID = $_POST["quizID"];

            if($total_questions>0){

	         //calculating %age
	            for($i=1 ; $i <= $total_questions ; $i++){
	                @$fetch_ID = "rads".$i;
	                @$php_id = $_POST[$fetch_ID];

	                $check_sql = mysql_query("SELECT correct FROM answers 
	                                            WHERE id='$php_id'") or die(mysql_error());
	                $q_answer = mysql_fetch_array($check_sql);
	                $marks += $q_answer[0];
	            }
	            $percent = ($marks/$total_questions)*100;

	         //getting total time taken by the user to complete the quiz
	            $get_time_query = mysql_query("SELECT now() - date_time FROM quiz_takers 
	                                            WHERE username = '$roll_no' ") or die(mysql_error());
	            $get_time = mysql_fetch_array($get_time_query);
	            $time_taken = $get_time[0];

	            $check_time_query = mysql_query("SELECT duration FROM quiz_takers 
	                                            WHERE username = '$roll_no' 
	                                            AND quiz_id = '$quiz_ID' ") or die(mysql_error());
	            $check_time = mysql_fetch_array($check_time_query);
	            $duration = $check_time[0];

	            if($duration==0){
		         //updating the %age and time taken by the user in the DB
	            	mysql_query("UPDATE quiz_takers 
	                	         SET marks='$marks', percentage= '$percent', duration= '$time_taken', quiz_id= '$quiz_ID'
	                    	     WHERE username = '$roll_no' ")or die(mysql_error());
	            }else{
	            	$user_msg = 'Sorry, but re-submission of the quiz isn\'t allowed!';
		        		header('location: index.php?user_msg='.$user_msg.'');
	            }
	        }else{
	        	$user_msg = 'Hey, Weird, but it seems the quiz had no questions!';
        		header('location: index.php?user_msg='.$user_msg.'');
            	exit();
	        }
        }else{
            $user_msg = 'Hey, Something went wrong! Tell the Admin!!';
        header('location: index.php?user_msg='.$user_msg.'');
            exit();
        }
    }else{
        $user_msg = 'Hey, This is the start Page!, So enter your username here first';
        header('location: index.php?user_msg='.$user_msg.'');
            exit();
    }



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Result</title>

        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/master.css">

	<style>
	div.select{
	margin-top: -150px;
    	margin-right: 50px;

}
div.logout{
padding-top:100x;
padding-right:20x;
}
	</style>
	
        <script type="text/javascript" src="scripts/overlay.js"></script>

        <!-- ****** favicons ****** -->
            <!-- Basic favicons -->
                <link rel="shortcut icon" sizes="16x16 32x32 48x48 64x64" href="img/faviconit/favicon.ico">
                <link rel="shortcut icon" type="image/x-icon" href="img/faviconit/favicon.ico">

            <!--[if IE]><link rel="shortcut icon" href="/favicon.ico"><![endif]-->

            <!-- For Opera Speed Dial -->
                <link rel="icon" type="image/png" sizes="195x195" href="img/faviconit/favicon-195.png">
            <!-- For iPad with high-resolution Retina Display running iOS ≥ 7 -->
                <link rel="apple-touch-icon" sizes="152x152" href="img/faviconit/favicon-152.png">
            <!-- For iPad with high-resolution Retina Display running iOS ≤ 6 -->
                <link rel="apple-touch-icon" sizes="144x144" href="img/faviconit/favicon-144.png">
            <!-- For iPhone with high-resolution Retina Display running iOS ≥ 7 -->
                <link rel="apple-touch-icon" sizes="120x120" href="img/faviconit/favicon-120.png">
            <!-- For iPhone with high-resolution Retina Display running iOS ≤ 6 -->
                <link rel="apple-touch-icon" sizes="114x114" href="img/faviconit/favicon-114.png">
            <!-- For Google TV devices -->
                <link rel="icon" type="image/png" sizes="96x96" href="img/faviconit/favicon-96.png">
            <!-- For iPad Mini -->
                <link rel="apple-touch-icon" sizes="76x76" href="img/faviconit/favicon-76.png">
            <!-- For first- and second-generation iPad -->
                <link rel="apple-touch-icon" sizes="72x72" href="img/faviconit/favicon-72.png">
            <!-- For non-Retina iPhone, iPod Touch and Android 2.1+ devices -->
                <link rel="apple-touch-icon" href="img/faviconit/favicon-57.png">
            <!-- Windows 8 Tiles -->
                <meta name="msapplication-TileColor" content="#FFFFFF">
                <meta name="msapplication-TileImage" content="img/faviconit/favicon-144.png">
        <!-- ****** favicons ****** -->

        <script language="javascript">
            document.addEventListener("contextmenu", function(e){
                e.preventDefault();
            }, false);
        </script>
    </head>

    <body  style="font-family: Arial;">

<div class = "logout" >
    <a href="../logout.php">Logout</a> 
</div>

  
        <div id="score" align="left" class = "select">
            <?php echo $roll_no; ?> ,You scored 
            <?php echo $marks; ?>/<?php echo $total_questions; ?>
	<?php
		if ($marks > 5){
		  echo "<br>". "you are selected <br> Come up in 3 working days with your resume.";
		mysql_connect("localhost","root","")or die("Not Connected");
		mysql_select_db("Internship") or die("No DB Found");
		mysql_query("INSERT INTO Allocation (Stud_email,A_id,C_name) VALUES ('$user','$aid','$name')"); 

}
		else 
		  echo "<br>"."<h4 color: black>". "Sorry, you are not selected  <br> Better luck next time"."</h4>";	
		?>

        </div>

        <div id="video" class="white_content" onclick="javascript:close_overlay();">
            <h1 style="color: WHITE; margin-top: 185px;">Nice Try, But its time to go now!</h1>
            <br>
            <h2 style="color: WHITE;">You should have watched it before..</h2>
        </div>

        <div id="fade_overlay">
            <a href="javascript:close_overlay();" style="cursor: default;">
                <div id="fade" class="black_overlay">
                </div>
            </a>
        </div>

       
    </body>
</html
