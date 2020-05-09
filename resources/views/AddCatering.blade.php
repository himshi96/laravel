<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="edge">
    <title>Catering</title>
    <meta name="viewport" content="width device-width= device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="bg-dark" >
<img src="radin1.png" class="rounded float-left" width="300" height="300">   <br><br>   <br><br>   <br><br>
<div class="container" ><p ><center><h1 class="text-warning display-5">CATERING ITEMS</h1></center></p>
    <div class="text-center">


        <form class="text-white input-group-sm" method ="post" action ="/saveCatering" >

            @foreach($errors->all() as $error)
                <div class ="alert alert-danger" role="alert">

                    {{$error}}
                </div>
            @endforeach

            {{csrf_field()}}


            <br><br><br>   <br><br>
            <label for="CateringID" class="text-warning"><b> CateringID</b></label>
            <input type ="text" class="form-control text-white bg-dark"  name="CateringID"><br><br>

            <label for="ItemName" class="text-warning" ><b>Name</b></label>
            <input type ="text" class="form-control text-white bg-dark"  name="ItemName"><br><br>

            <label for="ItemDetails" class="text-warning"><b>Details</b></label>
            <input type ="text" class="form-control text-white bg-dark"  name="ItemDetails"><br><br>

            <label for="ItemQuantity" class="text-warning"><b>Quantity</b></label>
            <input type ="number" class="form-control text-white bg-dark"  name="ItemQuantity"><br><br>

            <input type ="submit" class="btn text-white bg-success" name="AddItem" value="ADD ITEM">

            <br><br><br><br>


            <br><br>
            <table class="table bg-dark  text-warning table-hover ">
                <th>id</th>
                <th>CateringID</th>
                <th>ItemName</th>
                <th>ItemDetails</th>
                <th>ItemQuantity</th>

                @foreach($AddCatering as $catering)
                    <tr>
                        <td>{{$catering->id}}</td>
                        <td>{{$catering->CateringID}}</td>
                        <td>{{$catering->ItemName}}</td>
                        <td>{{$catering->ItemDetails}}</td>
                        <td>{{$catering->ItemQuantity}}</td>
                        <td><a href ="/deleteCat/{{$catering-> id}}" class="btn btn-danger">DELETE</a></td>
                        <td><a href ="/updateCat/{{$catering-> id}}" class="btn btn-warning">UPDATE</a></td>
                    </tr>



                @endforeach
            </table>


    </div>
    </form>
</div>
</div>

</body>
</html>
