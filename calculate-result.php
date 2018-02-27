<?php
	$thb = $_POST['THB'];
	$type = $_POST['type_money'];

	if ($type == "USD") {
		$rate = 31.2273;	
	} elseif ($type == "JYP") {
		$rate = 28.9814;	
	} elseif ($type == "KRW") {
		$rate = 0.0290;
	} elseif ($type == "GBP") {
		$rate = 43.3292;
	} elseif ($type == "EUR") {
		$rate = 38.2737;
	}
	$result = number_format((float)$thb / $rate, 2, '.', '');

	require 'connect.php';
	$sql = "INSERT INTO exchange194(thb, calculated, currency)
			VALUES($thb, $result, '$type')";
	$sql_exe = $conn -> query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>

	<style>
        .card-title {
            padding: 20px; 
        }
        .ml-5 {
            padding-left: 20px;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="offset-md-2">
                <h2 class="mt-5">แอปพลิเคชั่นคำนวณแลกเปลี่ยนเงินตราต่างประเทศ</h2>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header">Exchange Rate  <?php echo $thb. ' THB  -> '. $type; ?> </h5>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Result <?php echo ' = '. number_format((float)$result, 2,'.',''). ' '. $type; ?> </h5>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5"></div>

	<div class="container">
		<div class="row">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
			            <th>THB</th>
			            <th>CURRENCY</th>
			            <th>CALCULATED</th>
			            <th>DATERECORD</th>
			            <th></th>
		            </tr>
		        </thead>
		        <tbody>
		    <?php 
				$sql = "SELECT * FROM exchange194 ORDER BY dateRecord DESC";
				$sql_exe = $conn->query($sql);
				while ($row = mysqli_fetch_assoc($sql_exe)) {
			 ?>
		            <tr>
			           	<td><?php echo $row['thb'] ?></td>
			            <td><?php echo $row['currency'] ?></td>
			            <td><?php echo $row['calculated'] ?></td>
			            <td><?php echo $row['dateRecord'] ?></td>
						<td><a class="btn btn-danger float-right" href="delete.php?id=<?php echo $row['recordID']?>&thb=<?php echo $row['thb']?>">Delete</a></td>						
		            </tr>
		    <?php
				} 
				$conn->close();
			 ?>
		        </tbody>
		    </table>
		</div>
	</div>

</body>
</html>