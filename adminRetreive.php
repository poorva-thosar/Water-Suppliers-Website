<?php
$host="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="user_data";

//create connection
$mysqli=new mysqli($host,$dbUserName,$dbPassword,$dbName);

//$mysqli = new mysqli("localhost", "root_user", "root_password", "database");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$getinfo = "select 
                   no, 
                   address,
					phoneno,
					l5,
					l15,
					l30,
                   tanker 
              from book_data";



if ($result = $mysqli->query($getinfo)) {    
     while ($row = $result->fetch_object()) {
		$no= $row->no;
                   $address=$row->address;
					$phoneno=$row->phoneno;
					$l5=$row->l5;
					$l15=$row->l15;
					$l30=$row->l30;
                   $tanker=$row->tanker;
				   
    }
    $result->close();
}
else
{
   echo'something went wrong.';
}
?>