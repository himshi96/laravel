
@extends('layouts.my')
@section('content')
    <br><br>
    <center> <h1>Catering Item List </h1></center>
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



@endsection

