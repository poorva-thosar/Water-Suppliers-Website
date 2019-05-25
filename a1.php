<html>
    <head>
        <meta charset="UTF-8">
        <title>Orders</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
    <body>

        <?php
		$host="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="user_data";

//create connection
//$mysqli=new mysqli($host,$dbUserName,$dbPassword,$dbName);

        $con=  mysqli_connect($host,$dbUserName,$dbPassword,$dbName);
//<!-- detail is the database in MySqli Database -->
        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from book_data");
//<!-- signup is the table in the detail_Database -->
       ?>
	   
        <div>
         <table class="table table-striped">
            <th> Entry No.</th>
                    <th>Address</th>
                    <th>Phone No.</th>
                     <th>5 litres</th>
                    <th>15 litres</th>
                    <th>30 litres</th>
                    <th>Tanker</th>
                    

            </tr>
        <?php
             while($row=  mysqli_fetch_array($con))
             {
                 ?>
            <tr>
                <td><?php echo $row['no']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['phoneno']; ?></td>
                <td><?php echo $row['l5'] ;?></td>
                <td><?php echo $row['l15'] ;?></td>
                <td><?php echo $row['l30'] ;?></td>
                <td><?php echo $row['tanker'] ;?></td>
            </tr>
        <?php
             }
             ?>
             </table>
            </div>
    </body>
</html>