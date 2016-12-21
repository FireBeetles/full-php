<html>
	<head>
		<title>Data Dwarves &mdash; Mining For Fun and Profit</title>
		<?php include 'includes\dependencies.php' ?>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
			${demo.css}
		</style>
				<script src="js/WBGR.js"></script>
				<script src="js/WBMP.js"></script>
				<script src="js/ERGrad.js"></script>
				<script src="js/ERmin.js"></script>
				<script src="js/TSGrad.js"></script>
				<script src="js/TSmin.js"></script>
				<script src="js/CPGrad.js"></script>
				<script src="js/CPmin.js"></script>
				<script src="js/NSGrad.js"></script>
				<script src="js/NSmin.js"></script>
				<script>
					function myFunction() {
						var x = "container"+document.getElementById("SchoolDropDown").value;
						var y = document.getElementsByClassName("containerChart");
						for (i = 0; i < 5; i++){
							y[i].style.display = 'none';
						}
						document.getElementById(x).style.display = 'block';
						
					}
				</script>
	</head>
	<body>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/highcharts-3d.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>

		<?php include 'includes\header.php';
		if(!isset($_SESSION['username'])) {
			$_SESSION['error'] = 'Please log in before accessing data pages.';
			$_SESSION['redirect'] = basename($_SERVER['PHP_SELF']);
			exit(header("Location:http://localhost/full-php-master/full-php-master/login.php"));
		} else { ?>
		<article>
			<button type="button" onclick="myFunction()">Select School</button>
			<select id="SchoolDropDown">
				<option value="WBSHS">
					Woodbury Senior High School
				</option>
				<option value="ERSHS">
					East Ridge Senior High School
				</option>
				<option value="TSHS">
						Tartan Senior High School
				</option>
				<option value="CPSHS">
					<h1>Como Park Senior High School</h1>
				</option>
				<option value="NSHS">
					North Senior High School
				</option>
			</select>
			
			
			<div id="demo">
			
				<div class="containerChart" id="containerWBSHS" style="display:none;">
					<h1>Woodbury Senior High School</h1>
					<table>
						<tr>
							<th class="tblehd">Tenure: Steady</th>
							<th class="tblehd">Distance: 5.1 Miles</th>
						</tr>
						<tr>
							<th class="piechart"><div id="WBGR" ></div></th>
							<th class="piechart"><div id="WBMP" ></div></th>
						</tr>
					</table>
				</div>
				
				<div class="containerChart" id="containerERSHS" style="display:none;">
					<table>
						<h1>East Ridge Senior High School</h1>
						<tr>
							<th class="tblehd">Tenure: Grown</th>
							<th class="tblehd">Distance: 8.5 Miles</th>
						</tr>
						<tr>
							<th class="piechart"><div id="ERGrad" ></div></th>
							<th class="piechart"><div id="ERmin" ></div></th>
						</tr>
					</table>
				</div>
				
				<div class="containerChart" id="containerTSHS" style="display:none;">
					<table>
						<h1>Tartan Senior High School</h1>
						<tr>
							<th class="tblehd">Tenure: Steady</th>
							<th class="tblehd">Distance: 2.4 Miles</th>
						</tr>
						<tr>
							<th class="piechart"><div id="TSGrad" ></div></th>
							<th class="piechart"><div id="TSmin" ></div></th>
						</tr>
					</table>
				</div>
				
				<div class="containerChart" id="containerCPSHS" style="display:none;">
					<table>
						<h1>Como Park Senior High School</h1>
						<tr>
							<th class="tblehd">Tenure: Steady</th>
							<th class="tblehd">Distance: 8.7 Miles</th>
						</tr>
						<tr>
							<th class="piechart"><div id="CPGrad" ></div></th>
							<th class="piechart"><div id="CPmin" ></div></th>
						</tr>
					</table>
				</div>
				
				<div class="containerChart" id="containerNSHS" style="display:none;">
					<table>
						<h1>North Senior High School</h1>
						<tr>
							<th class="tblehd">Tenure: Decreased</th>
							<th class="tblehd">Distance: 5.4 Miles</th>
						</tr>
						<tr>
							<th class="piechart"><div id="NSGrad" ></div></th>
							<th class="piechart"><div id="NSmin" ></div></th>
						</tr>
					</table>
				</div>
				
			</div>
		</article>
		<?php }
		include 'includes\footer.php' ?>
	</body>
</html>