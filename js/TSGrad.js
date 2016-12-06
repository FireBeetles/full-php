$(function () {
    Highcharts.chart('TSGrad', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Graduation Percentage of East Ridge'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Graduation Percentage',
            data: [
                ['graduate', 90.0],
                {
                    name: 'do not garduate',
                    y: 10.0,
                    sliced: true,
                    selected: true
                },

            ]
        }]
    });
});