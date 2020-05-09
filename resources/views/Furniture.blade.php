
@extends('layouts.my')
@section('content')
    <br><br>
    <center> <h1>Furniture List </h1></center>
    <table class="table bg-dark  text-warning table-hover">
        <th>id</th>
        <th>FurnitureID</th>
        <th>Name</th>
        <th>Details</th>
        <th>Quantity</th>
        <br><br><br><br>
        @foreach($Furniture as $furniture)
            <tr>
                <td>{{$furniture->id}}</td>
                <td>{{$furniture->FurnitureID}}</td>
                <td>{{$furniture->Name}}</td>
                <td>{{$furniture->Details}}</td>
                <td>{{$furniture->Quantity}}</td>

            </tr>


        @endforeach


        <table>



@endsection

