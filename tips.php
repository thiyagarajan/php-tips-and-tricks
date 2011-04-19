Clear Unset All Domain Cookies
==============================
$cookies=array_keys($_COOKIE);  
$domain=".mydomain.com";  
foreach($cookies as $cookie){  
  $when=time()-3600;  
  setcookie($cookie, "", $when, "/", $domain);  
}

Mysql database connect and get table field value 
================================================
// database settings   
$db_address = "hostname";   
$db_username = "username";   
$db_password = "password";   
$tb_database = "databasename";   
$table="tbl_users";   
// connect  
$conn = mysql_connect($db_address, $db_username, $db_password) or die ('Error connecting to database '.$db_address);  
// select the database  
mysql_select_db($tb_database);  
  
// get the data and add to an array  
$query="SELECT * FROM $table;";  
$result=mysql_query($query);  
while($row=mysql_fetch_assoc($result)){  
  $users[]=$row;    
}
