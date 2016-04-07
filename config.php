/////////////////////////////////PHP LOGIN WORKS
<?php
$server_name = 'kmc353_4.encs.concordia.ca';
$user = 'kmc353_4';
$pass = 'Pjlz6102';
$database = 'kmc353_4';
$link = mysql_connect($server_name, $user, $pass);
mysql_select_db($database);
if (!$link) {
	die('Could not connect: ' . mysql_error());
}

echo "Connected successfully";




/////////////////////////////////////////////////////////
Select * from Department

$sql	= 'SELECT * FROM Department';
$result = mysql_query($sql, $link);

if (!$result) {
	echo "DB Error, could not query the database\n";
	echo 'MySQL Error: ' . mysql_error();
	exit;
}


while($row = mysql_fetch_array($result, MYSQL_NUM))
{
	echo "Department ID :{$row[0]}  <br> ".
     	"name: {$row[1]} <br> ".
     	"phone1: {$row[2]} <br> ".
     	"phone2: {$row[3]} <br> ".
   	  "fax: {$row[4]} <br> ".
   	  "room: {$row[5]} <br> ".
   	  "Manager ID: {$row[6]} <br> ".
     	"--------------------------------<br>";
}
echo "Fetched data successfully\n";


mysql_free_result($result);
