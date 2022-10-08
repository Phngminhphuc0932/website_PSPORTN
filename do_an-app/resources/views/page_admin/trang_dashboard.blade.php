@extends('templates.template_admin')

@section('main-content')
    <!--main content start-->
<section id="main-content">
    <section class="wrapper">
    
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/series-label.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
      
      <select name="" id="chon_nam">
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
      </select>

      <figure class="highcharts-figure">
        <div id="test_chart"></div>
        <p class="highcharts-description">
          Basic line chart showing trends in a dataset. This chart includes the
          <code>series-label</code> module, which adds a label to each line for
          enhanced readability.
        </p>
      </figure>

      <script>
        var data_chart  = [];

        var options = {
            chart: {
                renderTo: 'test_chart',
                type: 'spline'
            },
            series: [{}]
        };
        
       

        $.get('/analytics-doanh-thu/2016')
          .then((result) => {
            //console.log(data);
            data_chart = result.data
            data_chart = JSON.parse(data_chart);
            //console.log()

            options.series = [
              {
                  name: 'Doanh thu',
                  data: data_chart
              }
            ];
            var chart = new Highcharts.Chart(options);
          })
         

        $('#chon_nam').change((event) => {
          //console.log(event.target.value);
          $.get('/analytics-doanh-thu/' + event.target.value)
          .then((result) => {
            //console.log(data);
            data_chart = result.data
            data_chart = JSON.parse(data_chart);
            //console.log()

            options.series = [
              {
                  name: 'Doanh thu',
                  data: data_chart
              }
            ];
            var chart = new Highcharts.Chart(options);
          })
        })

        

        
      </script>
    </section>
</section>
<!--main content end-->
@endsection