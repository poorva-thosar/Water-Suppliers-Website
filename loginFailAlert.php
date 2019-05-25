<html>
<head>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		swal({
				title: "Login Failed",
				text: "Incorrect Email Or Password... Try Again",
				icon: "error",
				button: "OK",
            }).then(function() {
                location.href = 'login.php';
            });
	</script>
</body>
</html>