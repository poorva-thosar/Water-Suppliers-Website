<?php
$host="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="user_data";

//create connection
$conn=new mysqli($host,$dbUserName,$dbPassword,$dbName);
	
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fullname=filter_input(INPUT_POST,'fullname');
$emailaddress=filter_input(INPUT_POST,'emailaddress');
$username=filter_input(INPUT_POST,'username');
$phoneno=filter_input(INPUT_POST,'phoneno');
$presentaddress=filter_input(INPUT_POST,'presentaddress');
$permanentaddress=filter_input(INPUT_POST,'permanentaddress');
$password=filter_input(INPUT_POST,'password');

	//$mysqli = new mysqli($host,$dbUserName,$dbPassword,$dbName);
	$result1 = $conn->query("SELECT id FROM register_data WHERE email = '$emailaddress'");
	$result2 = $conn->query("SELECT id FROM register_data WHERE password = '$password'");
	if($result1->num_rows != 0 || $result2->num_rows != 0) {
		//email or passowrd already there in the database
		//Giving alert message that the entry has not been taken 
		//then redirecting to register.html page again
		
				    header("location: registerFailAlert.php");
	} 
	else {
		
		//Entering data into the database
	           
				$sql = "SELECT * FROM `register_data`";

				$result = mysqli_query($conn, $sql);
				$count = mysqli_num_rows($result);
				$count = $count+1;

				$sql ="INSERT INTO `register_data`(`id`, `fullName`, `email`, `userName`, `password`, `mobile`, `permanentAddr`, `presentAddr`) VALUES ('$count','$fullname','$emailaddress','$username','$password','$phoneno','$permanentaddress','$presentaddress');";
								
				if(mysqli_query($conn,$sql))
				{
					//echo "<br><h3>One row inserted.......</h3>";
					header("location: registerAlert.php");
				}
				else
					//header("location: registerFailAlert.php");
					echo "Error in insertion....." . mysqli_error($conn);
				    
		}
?>

