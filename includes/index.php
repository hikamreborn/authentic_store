<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 
<?php 
	session_start(); 
	require("includes/connection.php"); 
	if(isset($_GET['page'])){ 
		 
		$pages=array("products", "cart"); 
		 
		if(in_array($_GET['page'], $pages)) { 
			 
			$_page=$_GET['page']; 
			 
		}else{ 
			 
			$_page="products"; 
			 
		} 
		 
	}else{ 
		 
		$_page="products"; 
		 
	} 
?>
<?php 
 
 $server="localhost"; 
 $user="root"; 
 $pass=""; 
 $db="authentic_store"; 
  
 // connect to mysql 
  
 mysql_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql."); 
  
 // select the db 
  
 mysql_select_db($db) or die("Sorry, can't select the database."); 

?>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
   
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link rel="stylesheet" href="css/reset.css" /> 
	<link rel="stylesheet" href="css/style.css" /> 
    <link rel="stylesheet" href="../css1/style.css">
	 
	<title>Shopping cart</title> 
 
</head> 
 
<body> 
	 
	<div id="container"> 
 
		<div id="main"> 
			 
		</div><!--end main--> 
		 
		<div id="sidebar"> 
			 
		</div><!--end sidebar--> 
 
	</div><!--end container--> 
 
</body> 
</html>