<!DOCTYPE html>
<html>
<head>
    <title>iTalent charts</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <style type="text/css">
        .box{
            width:800px;
            margin:0 auto;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">	
	<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>	
	<script type="text/javascript" src="{{asset('assets/js/echarts.min.js')}}"></script>
</head>
<body>
    <div class="container" style="margin-top: 50px;">
    <div class="container">
    <?php echo  $dataa ?>
    </div>
    <br><br><br>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Product Sold By Quantity</h3>
                    </div>
                    <div class="panel-body" align="center">
                        <div id="pie_chart" style="width:750px; height:450px;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    

    <script type="text/javascript">

        var analytics = <?php echo $dataa; ?>;


        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {
            var data = google.visualization.arrayToDataTable(analytics);

            var options = {
                title : 'Product Sold By Quantity',
                is3d:true,
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>


</body>
</html>