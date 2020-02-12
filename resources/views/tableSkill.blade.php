<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<div id="chart">
</div>

<script type="text/javascript">
  var options = {
          series: [{
          name: 'My Point',
          data: [75, 60, 70, 70, 70, 60, 70],
        }],
          chart: {
          height: 450,
          type: 'radar',
          dropShadow: {
            enabled: true,
            blur: 1,
            left: 1,
            top: 1
          }
        },
        dataLabels: {
          enabled: true,
        },
        plotOptions: {
          radar: {
            size: 180,
            polygons: {
              strokeColor: '#3c1017',
              fill: {
                colors: ['#737373', '#fff']
              }
            }
          }
        },
        title: {
          text: ''
        },
        colors: ['#d35f70', '#ffffff'],
        markers: {
          size: 6,
          colors: ['#f4d7db'],
          strokeColor: '#c8374d',
          strokeWidth: 2,
        },
        tooltip: {
          y: {
            formatter: function(val) {
              return val
            }
          }
        },
        xaxis: {
          categories: ['Laravel', 'Javascript', 'SQL', 'CSS & HTML', 'Microsoft Office', 'Corel Drew', 'PHP', ]
        },
        yaxis: {
          tickAmount: 7,
          labels: {
            formatter: function(val, i) {
              if (i % 2 === 0) {
                return val
              } else {
                return ''
              }
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
      
</script>