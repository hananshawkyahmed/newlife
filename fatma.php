<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<form method="post" action="">
 name :              
<input type="text" name="new_name" />



<br><br> 
 
gender: 
 
<input type="radio" name="new_gender"  value="male"/>male
<input type="radio" name="new_gender"  value="femle"/>femle 
 
 <br><br> 
 
       city : <select name="new_city" value="">
          
          <option> luxor</option>
          <option > aswan </option>
          <option >qena</option>
           
         </select>
         <br><br> 
         <input type="submit" value="submit"> 


</form>
<?php 
$HostName="localhost";
$db_name="hanandb";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['new_name']) && isset($_POST['new_gender']) && isset($_POST['new_city']) ) {
$sql = "INSERT INTO newday (n_name,n_gender,n_city) VALUES ('$_POST[new_name]' ,'$_POST[new_gender]','$_POST[new_city]' )" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;

mysql_close($con);

?>
 </body>
</html>