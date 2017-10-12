<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<title> companies </title> 
<body>
 <?php  

        # Establishing connection

        mysql_connect("localhost","root","")or die("Not Connected");
        mysql_select_db("Internship") or die("No DB Found");
        mysql_query("SELECT C_name,c_info,c_criteria FROM Company WHERE A_id=9");
</body>

</html>
