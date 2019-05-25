<html>
<head>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		swal({
				title: "Registration Failed",
				text: "Choose some other username or password",
				icon: "error",
				button: "OK",
            }).then(function() {
                location.href = 'register.html';
            });
	</script>
</body>
</html>