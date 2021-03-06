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

        <h1 class="mt-5 text-center"> iTalent Restaurant </h1>


        <h3 class="mt-5 text-center">Add Order</h3>
        @if(session()->has('status'))
        <div class="alert alert-success">
            {{ session()->get('status') }}
        </div>
        @endif
<br><br>
        <div class="col-lg-7 box2">
        <form action="placeorder" method="post">
            @csrf
            <table border=0>
                <tr>
                    <td>Item </td>
                    <td>
                        <div class="form-group">
                        <select class="form-control" id="product" onchange="cook()" name='product'>
                            <option value="tea">Tea</option>
                            <option value="coffee">Coffee</option>
                            <option value="samosa">Samosa</option>
                            <option value="cake">Cake</option>
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td> Quantity </td>
                    <td> <input name="quantity" type="text" class="form-control" oninput="cook(this.value)" value="0" onchange="cook(this.value)"> </td>
                </tr>
                <tr>
                    <td>Total Amount </td>
                    <td>  
                        <input type="text" name="total" class="form-control" id="outputme"  placeholder="&#8377; Total Amout">
                    </td>
                </tr>
                <input type="hidden" name='user' value="{{session('data')['userid']}}">
                <tr>
                    <td></td>
                    <td> 
                    <button class="btn btn-success btn-block">Submit</button>
                    </td>
                </tr>

            </table>
        </form>
        </div>
    </div>

    <footer>
        Copyright &#169; 2020 : &nbsp; <a href="http://swapnilsutar.netlify.com/" target="_blank">  Swapnil Sutar </a> 
    </footer>

<script>
    function cook(val){
        var x = document.getElementById("product").value;   
        if( x == 'tea' || x == 'coffee'){
            var price = 10;
        }
        else if( x == 'samosa' || x == 'cake'){
            var price = 15;
        }
        valNum = parseFloat(val);

        document.getElementById("outputme").innerHTML=valNum*price;
        document.getElementById("outputme").value=valNum*price;
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>