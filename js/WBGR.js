$(function () {
    Highcharts.chart('WBGR', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Graduation Percentage of Woodbury'
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
                ['Successfully graduate', 95.0],
                {
                    name: 'Do not graduate',
                    y: 5.0,
                    sliced: true,
                    selected: true
                },

            ]
        }]
    });
});