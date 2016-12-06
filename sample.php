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
	</head>
	<body>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/highcharts-3d.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>

		<?php include 'includes\header.php'; ?>
		<article>
			<table>
				<h1>Woodbury Senior High School</h1>
				<tr>
					<th class="tblehd">Tenure: Steady</th>
					<th class="tblehd">Distance: 5.1 Miles</th>
				</tr>
				<tr>
					<th class="piechart"><div id="WBGR" ></div></th>
					<th class="piechart"><div id="WBMP" ></div></th>
				</tr>
			</table>
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
			
		</article>
		<?php include 'includes\footer.php' ?>
	</body>
</html>