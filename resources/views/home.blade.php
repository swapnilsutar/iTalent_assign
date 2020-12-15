<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iTalent </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">
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
                    <a class="nav-link" href="report">Reports</a>
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
        <h1 class="text-center mt-5">Welcome to iTalent Restaurant</h1>
        <br><br>
        <br><br>
        <h4 class="text-center">Good Morning {{session('data')['userid']}} </h4>


        <div class="row ">
            <div class="col-lg-6 d-flex justify-content-center">
            <a href="/order">
                <button class="btn-me">Make Fresh Order</button>
            </a>
            </div>
            
            <div class="col-lg-6 d-flex justify-content-center">
            <a href="/report">
                <button class="btn-me">View Reports</button>
            </a>
            </div>
        </div>

    </div>

    <footer>
        Copyright &#169; 2020 : &nbsp; <a href="http://swapnilsutar.netlify.com/" target="_blank">  Swapnil Sutar </a> 
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>