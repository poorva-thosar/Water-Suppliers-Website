<?php

$myemail="thosarpoorva@gmail.com";
$mypass="12345";

$host="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="user_data";

if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];
	
	$mysqli = new mysqli($host,$dbUserName,$dbPassword,$dbName);
	$result1 = $mysqli->query("SELECT id FROM register_data WHERE email = '$email'");
	$result2 = $mysqli->query("SELECT id FROM register_data WHERE password = '$pass'");
	if($result1->num_rows == 0 || $result2->num_rows == 0) {
     // row not found, do stuff...
	    	header("location: loginFailAlert.php");    //redirects to loginFailAlert.php file when user directly enters the validate.phph url
	} 
	else {
		//row found do other stuff...
	        
		if(isset($_POST['remember']))
		{
		   setcookie('email',$email,time()+60*60*7);	
		}
		session_start();
	    $_SESSION['email']=$email;
		$_SESSION['loggedin'] = true;
	}
	$mysqli->close();
				  
}
else
{
	header("location: login.php");    //redirects to login.php file when user directly enters the validate.phph url
}

?>

<html>
<head>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		swal({
				title: "Done!",
				text: "You Have Logged In!",
				icon: "success",
				button: "OK",
            }).then(function() {
                location.href = 'MainPage.php';
            });
	</script>
</body>
</html>