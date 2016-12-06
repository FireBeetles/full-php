$(function () {
    Highcharts.chart('WBMP', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Percentage of minorities'
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
            name: 'Percentage of Student Body',
            data: [
                ['Caucasian', 70.0],
                {
                    name: 'Minorities',
                    y: 30,
                    sliced: true,
                    selected: true
                },

            ]
        }]
    });
});