<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="edge">
    <title>Update Furniture</title>
    <meta name="viewport" content="width device-width= device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <img src="/radin1.png" class="rounded float-left" width="300" height="300">
</head>
<body style ="background-color:#ccb63b">

<div class="container" >

    <br><br><br><br><br><br><br><br>


    <p ><center><h1 class="text-warning display-5">UPDATE FURNITURE</h1></center></p>
    <div class="text-center">

        <form action ="/updateFurniture" method="post" class="text-white bg-dark">
            {{csrf_field()}}

            <br><br>


            <label for="FurnitureID" class="text-warning" ><b> FurnitureID</b></label>
            <input type="text" class="form-control  text-white bg-dark" name="FurnitureID" value="{{$updata ->FurnitureID}}"/><br>
            <label for="Name" class="text-warning" ><b> Name</b></label>
            <input type="text" class="form-control  text-white bg-dark" name="Name" value="{{$updata ->Name}}"/><br>
            <label for="Details" class="text-warning" ><b> Details</b></label>
            <input type="text" class="form-control  text-white bg-dark" name="Details" value="{{$updata ->Details}}"/><br>
            <label for="Quantity" class="text-warning" ><b> Quantity</b></label>
            <input type="number" class="form-control  text-white bg-dark" name="Quantity" value="{{$updata ->Quantity}}"/><br>

            <input type="hidden" class="form-control" name="id" value="{{$updata ->id}}"/>
            <br><br>
            <input type="submit" href ="/AddFurniture"  class="btn btn-success" value="UPDATE"/>
            <br><br>
            <a href ="/AddFurniture" class="btn btn-warning">CANCEL</a></td>
            <br><br><br>
        </form>

    </div>
</div>



</body>
</html>
