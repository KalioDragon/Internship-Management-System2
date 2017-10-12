    <?php   
    session_start();  
  $user=$_SESSION['sess_user'];
    ?>  
    <!doctype html>  
    <html>  
    <head>  
    <title>Welcome</title>                                
    </head>  
    <body>  
    <h3>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h3>  
   
 
<?php 


?>

  
    </body>  
    </html>  
    
