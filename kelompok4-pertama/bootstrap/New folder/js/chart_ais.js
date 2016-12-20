
$(function(){
    $("#chart").highcharts({
        title: {
            text: 'Pendapatan Mingguan',
            x: -20
        },
        subtitle: {
            text: 'Sitem chart',
            x: -20
        },
        xAxis: {
            categories: ['senin','selasa','rabu','kamis','jumat','sabtu','minggu']
        },
        yAxis: {
            title: {
                text: 'Pendapatan (Ribu)'
            }
        },
        series: [{
            name: 'Pendapatan (Ribu)',
            data: <?php echo json_encode($data); ?>
        }]
    });
}); 
