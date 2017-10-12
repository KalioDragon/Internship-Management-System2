    <?php   
ini_set('display_errors', 0);
error_reporting( E_WARNING | E_PARSE);  
    session_start();  
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
  
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Calm breeze login screen</title>
      <link rel="stylesheet" href="css/style.css">  
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>

		<form action="#" method="POST">  
		    Username: <input type="text" name="user"><br />  
		    Password: <input type="password" name="pass"><br />   
		    <input type="submit" value=" Login" name="submit" />  
  		     <p><a href="register.php">Don't have a account? Sign up</a> 
                      
		    </form>

  
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

   ?>
    <?php  

        # Establishing connection

        mysql_connect("localhost","root","")or die("Not Connected");
        mysql_select_db("Internship") or die("No DB Found");
        
        # for student login 

    if(isset($_POST["submit"]))
    {  
      
        if(!empty($_POST['user']) && !empty($_POST['pass']))
         {  
                $user=$_POST['user'];  
                $pass=$_POST['pass'];  

                echo $user;
                $query=mysql_query("SELECT * FROM Student WHERE Email='$user' AND pass='$pass'");  
		
                             
                $numrows=mysql_num_rows($query);  
                    if($numrows!=0)  
                    {      session_start();  
                            $_SESSION['sess_user']=$user;  

				header("location: member.php");
			}
                    else 
                    {  
                         $query=mysql_query("SELECT * FROM Manager WHERE Email='$user' AND pass='$pass'");
			$numrows=mysql_num_rows($query);
			if($numrows!=0)  
                       {      session_start();  
                            $_SESSION['sess_user']=$user; 
 				$_SESSION['aid']=$aid; 
				$_SESSION['cname']=$name;
				header("location: admin.php");
			}
			else
			{       
			echo "Invalid username or password!";  
			}
                    }  
      
        } 
        
     else 
        {  
            echo "Problem All fields are required!";  
        }
    } 

    # for professor login   

    ?>  
    </body>  
    </html>   
