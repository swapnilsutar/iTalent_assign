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
    
        <h1 class="text-center mt-5">Welcome to iTalent Restaurant</h1>
        <br><br>
        <p style="float:right">
            <a href="logout">Logout</a>
        </p>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>