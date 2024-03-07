<?php
  include "connect_db.php";
   
 $FirstName=isset($_REQUEST['firstName'])?$_REQUEST['FirstName']:'';
 $LastName=isset($_REQUEST['LasName'])?$_REQUEST['LastName']:'';
 $MiddleName=isset($_REQUEST['MiddleName'])?$_REQUEST['MiddleName']:'';
 $Address=isset($_REQUEST['Address'])?$_REQUEST['Address']:''; 
  
 Open_Mysql();
 $Found=0;
 $query = "Select * from Test where LastName like '".$LastNAme ."'";
 $result = mysql_query($query);
 
 
  while($row=mysql_fetch_array($result))
	        { $Found=1;}
			
if ($Found==1) {$query = "Update Test set LastName='$FirstName' where LastName like '$LastName'";}
else {$query = "Insert into Test values('$LastName','$FirstName','$MiddleName','$Address')";}  
 
 $result = mysql_query($query);
?>