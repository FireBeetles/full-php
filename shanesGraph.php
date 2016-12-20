<html>
	<head>
		<title>Data Dwarves &mdash; Mining For Fun and Profit</title>
		<?php include 'includes\dependencies.php' ?>
	</head>

	<body>
		<?php include 'includes\header.php'; ?>
		<article>
			
    <div class="container">
        <div id="chart2">
        <h3 style="text-align: center;">Population of School by Students</h3>
        <canvas id="myPieChart" width="200" height="200"></canvas>
       </div>
	   <div id="chart2">
        <h3 style="text-align: center;">Spending of School per Student</h3>
        <canvas id="myPieChart2" width="200" height="200"></canvas>
       </div>
		</article>
	</div>
		<?php include 'includes\footer.php' ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="include/schoolData.json"></script>
 <script>
var ctz = document.getElementById("myPieChart");
var myPieChart = new Chart(ctz, {
    type: 'bar',
    data: {
        labels: ["Woodbury Senior High School", "East Ridge High School","Tartan Senior High School","Como Park Senior High School","North Senior High School"],
        datasets: [{
            label: 'Number of Students at School',
            data: (function(){
			   var totals = {
				   'Woodbury Senior High School': 0,
				   'East Ridge Senior High School': 0,
				   'Tartan Senior High School': 0,
				   'Como Park Senior High School': 0,
				   'North Senior High School': 0,
			   }
               data.forEach(function(element){
				   if(element.SCHOOL == "Woodbury Senior High School"){
					   totals['Woodbury Senior High School'] += element.STUDENT_POPULATION
				   }else if(element.SCHOOL == "East Ridge Senior High School"){
					   totals['East Ridge Senior High School'] += element.STUDENT_POPULATION
				   }else if(element.SCHOOL == "Tartan Senior High School"){
					   totals['Tartan Senior High School'] += element.STUDENT_POPULATION
				   }else if(element.SCHOOL == "Como Park Senior High School"){
					   totals['Como Park Senior High School'] += element.STUDENT_POPULATION
				   }else if(element.SCHOOL == "North Senior High School"){
					   totals['North Senior High School'] += element.STUDENT_POPULATION
				   }
			   })
               return [totals['Woodbury Senior High School'],totals['East Ridge Senior High School'],totals['Tartan Senior High School']
			   ,totals['Como Park Senior High School'],totals['North Senior High School']];
           })(),
            backgroundColor: [
                'rgba(54, 162, 235, 0.8)',
                'rgba(0, 255, 0, 0.8)',
                'rgba(255, 100, 86, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                'rgba(255, 255, 64, 0.8)',
            ],
            borderColor: [
                'rgba(54, 162, 235,1)',
                'rgba(0, 255, 0, 1)',
                'rgba(255, 100, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 255, 64, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
<script>
var ctz = document.getElementById("myPieChart2");
var myPieChart2 = new Chart(ctz, {
    type: 'bar',
    data: {
        labels: ["Woodbury (200,000,000)", "East Ridge (200,000,000)","Tartan (148,000,000)","Como Park (300,000,000)","North (147,000,000)"],
        datasets: [{
            label: 'Spending Per Student',
            data: (function(){
			   var totals = {
				   'Woodbury Senior High School': 0,
				   'East Ridge Senior High School': 0,
				   'Tartan Senior High School': 0,
				   'Como Park Senior High School': 0,
				   'North Senior High School': 0,
			   }
               data.forEach(function(element){
				   if(element.SCHOOL == "Woodbury Senior High School"){
					   totals['Woodbury Senior High School'] += element.SPENDING_STUDENT
				   }else if(element.SCHOOL == "East Ridge Senior High School"){
					   totals['East Ridge Senior High School'] += element.SPENDING_STUDENT
				   }else if(element.SCHOOL == "Tartan Senior High School"){
					   totals['Tartan Senior High School'] += element.SPENDING_STUDENT
				   }else if(element.SCHOOL == "Como Park Senior High School"){
					   totals['Como Park Senior High School'] += element.SPENDING_STUDENT
				   }else if(element.SCHOOL == "North Senior High School"){
					   totals['North Senior High School'] += element.SPENDING_STUDENT
				   }
			   })
               return [totals['Woodbury Senior High School'],totals['East Ridge Senior High School'],totals['Tartan Senior High School']
			   ,totals['Como Park Senior High School'],totals['North Senior High School']];
           })(),
            backgroundColor: [
                'rgba(54, 162, 235, 0.8)',
                'rgba(0, 255, 0, 0.8)',
                'rgba(255, 100, 86, 0.8)',
                'rgba(75, 192, 192, 0.8)',
                'rgba(255, 255, 64, 0.8)',
            ],
            borderColor: [
                'rgba(54, 162, 235,1)',
                'rgba(0, 255, 0, 1)',
                'rgba(255, 100, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 255, 64, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
	</body>
</html>