<html>
<head>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		swal({
				title: "Done!",
				text: "You Have booked successfully!",
				icon: "success",
				button: "OK",
            }).then(function() {
                location.href = 'MainPage.php';
            });
	</script>
</body>
</html>