<?php
    
	session_start();
	if(!$_SESSION['loggedin'])   //if we found user is not logged in
	{
		header('Location: login.php');
		die();
	}
	
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap-theme.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href="logincss.css">
<script type="text/javascript" src="bookNowjs.js"></script>
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
					<a class="nav-link" href="contact.html">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://localhost/Hello/login.php">Login</a>
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
                <div class="card-header">Book</div>
                    <div class="card-body">
                    <form name="my-form" onsubmit="return validform()" action="http://localhost/Hello/insertBook.php" method="POST">
						<div class="form-group row">
							<label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
								<div class="col-md-6">
									<input type="text" id="address" class="form-control" name="Address">
                                </div>
                        </div>

						<div class="form-group row">
							<label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
								<div class="col-md-6">
									<input type="text" id="phone_number" class="form-control" name="phoneno">
								</div>
						</div>
					
						<div class="input-group mb-3">
							  <div class="col-lg-12 form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-right">Choose Amount</label>
									<div class="input-group-prepend col-md-6">
										<div class="checkbox">
											<label><input type="checkbox" value="">5 litres</label>
										</div>
									</div>
									<label for="phone_number" class="col-md-4 col-form-label text-md-right"></label>
									<div class="col-md-6">
									  <select class="custom-select col-md-6" id="inputGroupSelect03" name="5l">
										<option selected>0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									  </select>
									</div>
							  </div>
									<div class="col-lg-12 form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-right"></label>
									<div class="input-group-prepend col-md-6">
										<div class="checkbox">
											<label><input type="checkbox" value="">15 litres</label>
										</div>
									</div>
									<label for="phone_number" class="col-md-4 col-form-label text-md-right"></label>
									<div class="col-md-6">
									  <select class="custom-select col-md-6" id="inputGroupSelect03" name="15l">
										<option selected>0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									  </select>
									</div>
								</div>
								<div class="col-lg-12 form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-right"></label>
									<div class="input-group-prepend col-md-6">
										<div class="checkbox">
											<label><input type="checkbox" value="">30 litres</label>
										</div>
									</div>
									<label for="phone_number" class="col-md-4 col-form-label text-md-right"></label>
									<div class="col-md-6">
									  <select class="custom-select col-md-6" id="inputGroupSelect03" name="30l">
										<option selected>0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									  </select>
									</div>
								</div>
								<div class="col-lg-12 form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-right"></label>
									<div class="input-group-prepend col-md-6">
										<div class="checkbox">
											<label><input type="checkbox" value="">Tanker</label>
										</div>
									</div>
									<label for="phone_number" class="col-md-4 col-form-label text-md-right"></label>
									<div class="col-md-6">
									  <select class="custom-select col-md-6" id="inputGroupSelect03" name="tanker">
										<option selected>0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									  </select>
									</div>
								</div>							  
						</div>	  
							 
						</br>
						
						<div class="col-md-6 offset-md-4">
							<button type="submit" class="btn btn-primary" value="book" name="book">
								book
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