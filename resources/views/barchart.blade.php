<!DOCTYPE html>
<html>
<head>
    <title>iTalent charts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="../style.css">

    <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
    <script type = "text/javascript">google.charts.load('current', {packages: ['corechart']});</script>
</head>
<body>   
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse m-auto" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="order">Order</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="report">Piechart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="barchart">BarGraph</a>
                </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Logout
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link active" href="logout">Logout ( {{session('data')['userid']}} ) </a>
                        </div>
                    </li>
                </ul>
            </div>
            </nav>
    </div>
    <br>
        <h1 class="text-center">REPORTS</h1>
        <br><br>
        <h3 class="text-center"> Bar Graph ( Product wise Sale )</h3>
        <div id = "container1" style = "width: 550px; height: 400px; margin: 0 auto"></div>
     
    <footer>
        Copyright &#169; 2020 : &nbsp; <a href="http://swapnilsutar.netlify.com/" target="_blank">  Swapnil Sutar </a> 
    </footer>

    <script language = "JavaScript">
        var analytics = <?php echo $dataa; ?>;

         function drawChart() {
            // Define the chart to be drawn.
            var data = google.visualization.arrayToDataTable(analytics);

            var options = {title: 'Product wise Sales'}; 

            // Instantiate and draw the chart.
            var chart = new google.visualization.BarChart(document.getElementById('container1'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>