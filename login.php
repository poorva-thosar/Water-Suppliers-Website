<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap-theme.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <script src="alert/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="alert/dist/sweetalert.css">

  <script type="text/javascript" src="loginjs.js"></script>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="logincss.css">

    <title>Login</title>
</head>

<body>
<!--For top navigation bar-->
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel topnav">
    <div class="container-fluid">
		<a class="navbar-brand" href="#">Wpliers</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/Hello/MainPage.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="AboutUs2.html">About</a>
				</li> 
				<li class="nav-item">
					<a class="nav-link" href="bookNow.php">Book</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="register.html">Register</a>
				</li>
			</ul>
		</div>
    </div>
</nav>

<!--Top navigation bar ends here-->

<main class="my-form">
<div class="cotainer">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>
                    <div class="card-body">
                    <form name="my-form" onsubmit="return validform()" action="http://localhost/Hello/validate.php" method="POST">
						<div class="form-group row">
							<label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
								<div class="col-md-6">
									<input type="text" id="email_address" class="form-control" name="email">
                                </div>
                        </div>

						<div class="form-group row">
							<label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
								<div class="col-md-6">
									<input type="text" id="phone_number" class="form-control" name="phoneno">
								</div>
						</div>

						<div class="form-group row">
							<label for="pass" class="col-md-4 col-form-label text-md-right">Password</label>
								<div class="col-md-6">
									<input type="password" id="pass" class="form-control" name="password">
								</div>
						</div>

						
						<div class="col-md-6 offset-md-4">
							<input type="checkbox" name="remember"  value="1">
								Remember me
							</button>
						</div>
						
						</br>
						
						<div class="col-md-6 offset-md-4">
							<button type="submit" class="btn btn-primary" value="Login" name="login" >
								Login
							</button>
						</div>
					</div>
                </form>
                </div>
			</div>
        </div>
    </div>
</div>
</main>

</body>
</html>
<?php
    if(isset($_COOKIE['email']))
	{
		$email=$_COOKIE['email'];
	    echo "<script>
		      document.getElementById('email_address').value='$email';
		      </script>";
	}
?>