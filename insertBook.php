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

$address=filter_input(INPUT_POST,'Address');
$phoneno=filter_input(INPUT_POST,'phoneno');
$l5=filter_input(INPUT_POST,'5l');
$l15=filter_input(INPUT_POST,'15l');
$l30=filter_input(INPUT_POST,'30l');
$tanker=filter_input(INPUT_POST,'tanker');


$sql = "SELECT * FROM `book_data`";

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$count = $count+1;

$sql ="INSERT INTO `book_data`(`no`, `address`, `phoneno`, `l5`, `l15`, `l30`, `tanker`) VALUES ('$count','$address','$phoneno','$l5','$l15','$l30','$tanker');";
			
if(mysqli_query($conn,$sql))
{
	echo "<br><h3>One row inserted.......</h3>";
	header("location: bookAlert.php");
	
}
else
	echo "Error in insertion....." . mysqli_error($conn);
?>

