<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="edge">
    <title>Inventory</title>
    <meta name="viewport" content="width device-width= device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="bg-dark" >
<img src="radin1.png" class="rounded float-left" width="300" height="300">
<div class="container">

    <div class="text-center ">

        <form class="text-white input-group-sm" method ="post" action ="/saveFurniture" >

            @foreach($errors->all() as $error)
                <div class ="alert alert-danger" role="alert">

                    {{$error}}
                </div>
            @endforeach

            {{csrf_field()}}
            <br><br><br><br><br><br><br>

            <h1 class="text-warning display-5">HOTEL FURNITURE </h1> <br><br>
            <br><br><br>

            <label for="FurnitureID" class="text-warning" ><b> FurnitureID</b></label>
            <input type ="text" class="form-control text-white bg-dark"  name="FurnitureID"><br><br>

            <label for="FName" class="text-warning"  ><b>Name</b></label>
            <input type ="text" class="form-control text-white bg-dark"  name="Name"><br><br>

            <label for="Details" class="text-warning" ><b>Details</b></label>
            <input type ="text" class="form-control text-white bg-dark"  name="Details"><br><br>

            <label for="Quantity" class="text-warning" ><b>Quantity</b></label>
            <input type ="number" class="form-control text-white bg-dark"  name="Quantity"><br><br>

            <input type ="submit" class="btn text-white bg-success" name="AddItem" value="ADD ITEM">
        </form>


        <br><br><br><br><br><br>



        <table class="table bg-dark  text-warning table-hover ">
            <th>id</th>
            <th>FurnitureID</th>
            <th>Name</th>
            <th>Details</th>
            <th>Quantity</th>

            @foreach($AddFurniture as $furniture)
                <tr>
                    <td>{{$furniture->id}}</td>
                    <td>{{$furniture->FurnitureID}}</td>
                    <td>{{$furniture->Name}}</td>
                    <td>{{$furniture->Details}}</td>
                    <td>{{$furniture->Quantity}}</td>
                    <td><a href ="/delete/{{$furniture-> id}}" class="btn btn-danger">DELETE</a></td>
                    <td><a href ="/update/{{$furniture-> id}}" class="btn btn-warning">UPDATE</a></td>
                </tr>

            @endforeach
        </table>


    </div>

</div>
</div>

</body>
</html>
