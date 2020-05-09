<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="edge">
    <title>Catering Items</title>
    <meta name="viewport" content="width device-width= device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body style ="background-color:#ccb63b">
<img src="radin1.png" class="rounded float-left" width="300" height="300">
@extends('layouts.my')
@section('content')
    <div class="container">
        <center>
            <br><br> <br><br> <br><br> <br><br>

            <a href="{{ url('/prnpriviewc') }}" class="btnprn text-dark bg-success btn-lg ">Print Catering Item List</a></center>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.btnprn').printPage();
            });
        </script>
        <center>
            <table class="table bg-dark  text-warning table-hover ">
                <th>id</th>
                <th>CateringID</th>
                <th>ItemName</th>
                <th>ItemDetails</th>
                <th>ItemQuantity</th>

                @foreach($Catering as $catering)
                    <tr>
                        <td>{{$catering->id}}</td>
                        <td>{{$catering->CateringID}}</td>
                        <td>{{$catering->ItemName}}</td>
                        <td>{{$catering->ItemDetails}}</td>
                        <td>{{$catering->ItemQuantity}}</td>

                    </tr>



                @endforeach
            </table>
        </center>
    </div>
@endsection
