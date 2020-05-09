<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="edge">
    <title>Update Catering</title>
    <meta name="viewport" content="width device-width= device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="bg-dark" >
<img src="/radin1.png" width="300" height="300">

<div class="container" >
    <p ><center><h1 class="text-warning display-5">UPDATE CATERING ITEMS</h1></center></p>
    <div class="text-center">

        <form action ="/updateCatering" method="post" class="text-white bg-dark">
            {{csrf_field()}}

            <br><br><br>
            <label for="CateringID" class="text-warning" ><b> CateringID</b></label>
            <input type="text" class="form-control  text-white bg-dark" name="CateringID" value="{{$updata2 ->CateringID}}"/><br>
            <label for="ItemName" class="text-warning" ><b> Name</b></label>
            <input type="text" class="form-control  text-white bg-dark" name="ItemName" value="{{$updata2 ->ItemName}}"/><br>
            <label for="ItemDetails" class="text-warning" ><b> Details</b></label>
            <input type="text" class="form-control  text-white bg-dark" name="ItemDetails" value="{{$updata2 ->ItemDetails}}"/><br>
            <label for="ItemQuantity" class="text-warning" ><b> Quantity</b></label>
            <input type="number" class="form-control  text-white bg-dark" name="ItemQuantity" value="{{$updata2 ->ItemQuantity}}"/><br>

            <input type="hidden" class="form-control" name="id" value="{{$updata2 ->id}}"/>
            <br><br>

            <input type="submit" class="btn btn-success" value="UPDATE"/>
            <br><br>

            <a href ="/AddCatering" class="btn btn-warning">CANCEL</a></td>
        </form>

    </div>
</div>



</body>
</html>
