<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="edge">
    <title>Inventory</title>
    <meta name="viewport" content="width device-width= device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="bg-dark">
<img src="radin1.png" class="rounded float-left" width="700" height="700">
<div class="container" >
    <br> <br>
    <p ><center><h1 class="text-warning display-1">Hotel Radin Pearl</h1></center></p>
    <div class="text-center">

        <br> <br>
        <a href = "{{('AddFurniture')}}" class="btn  text-dark bg-warning btn-lg" ><b>HOTEL FURNITURE</b></a> <br><br>
        <a href = "{{('AddCatering')}}" class="btn text-dark bg-warning btn-lg" ><b>CATERING ITEMS</b></a><br><br>
        <a href = "{{('Furniture')}}" class="btn  text-dark bg-warning btn-lg" ><b>GENERATE HOTEL FURNITURE REPORT</b></a> <br><br>
        <a href = "{{('Catering')}}" class="btn  text-dark bg-warning btn-lg" ><b>GENERATE CATERING ITEMS REPORT</b></a> <br><br><br>

    </div>
</div>
</body>
</html>
