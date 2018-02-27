<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js" ></script>
	<style type="text/css">
		body {
			height: 100vh;
		}
		.outer-wrapper { 
			display: table;
			width: 100%;
			height: 100%;
		}
		.inner-wrapper {
		  display:table-cell;
		  vertical-align:middle;
		  padding:15px;
		}
		.dd-container, .dd-select, .dd-options {
			width: 100% !important;
			background: rgb(255,255,255) !important;
		}
		.dd-selected-text, .dd-option-text{
            line-height: 0 !important;
        }
        .dd-selected-image, .dd-option-image{
            margin-top: 4.5px;
		}
	</style>
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="offset-md-3">
                <h2 class="mt-5">แอปพลิเคชั่นคำนวณแลกเปลี่ยนเงินตราต่างประเทศ</h2>

						<form action="calculate-result.php" method="post">
							<div class="form-group row mt-5">
								<label for="example-text-input" class="col-5 col-form-label">จำนวนเงินที่ต้องการแลก-เปลี่ยน (THB)</label>
								<div class="col-7">
									<input class="form-control" type="number" name="THB">
								</div>
							</div>

							<div class="form-group row">
								<label for="example-text-input" class="col-5 col-form-label">สกุลเงินที่ต้องการแลกเปลี่ยน</label>
								<div id="myDropdown" class="col-7">
									<select class="custom-select mb-2 mr-sm-2 mb-sm-0">
										<option data-imagesrc="https://www.bot.or.th/Thai/FinancialMarkets/_layouts/Application/Images/flagUSD.png" value="USD">USD</option>
										<option data-imagesrc="https://www.bot.or.th/Thai/FinancialMarkets/_layouts/Application/Images/flagJPY.png" value="JYP">JYP</option>
										<option data-imagesrc="https://www.bot.or.th/Thai/FinancialMarkets/_layouts/Application/Images/flagKRW.png" value="KRW">KRW</option>
										<option data-imagesrc="https://www.bot.or.th/Thai/FinancialMarkets/_layouts/Application/Images/flagGBP.png" value="GBP">GBP</option>
										<option data-imagesrc="https://www.bot.or.th/Thai/FinancialMarkets/_layouts/Application/Images/flagEUR.png" value="EUR">EUR</option>
									</select>
								</div>
							</div>
							<br>
							<input type="hidden" name="type_money" class="type_money">
                    		<button type="submit"  id="cal" class="btn btn-primary float-right">Calculate</button>							
						</form>
					
				</div>
			</div>	
		</div>
	</div>
	<script>
		var type_money;
		$('#myDropdown').ddslick({
			onSelected: function(data){
				console.log(data.selectedData.value);
				type_money = data.selectedData.value;
			}   
		});
		$('#cal').click(function(){
			$('.type_money').attr({
				"value": type_money,
			});
		});
	</script>
</body>
</html>