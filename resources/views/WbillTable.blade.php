<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <Title>WaterBillTablePage</Title>
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <img src="radin1_logo.png" width="600" height="700" align="left">
</head>

<body style ="background-color:#ccb63b">

    <div class="WbillTable">

        <h1 style="text-align: left; font-size: 60px" >Hotel Radin Pearl</h1>
    </div>
        <div class="text-left">
            <br>    <br> <br>   <br>    <br> <br>  <br>    <br> <br>   <br>    <br> <br> <br>   <br>
            <br> <br> <br>   <br>  <br> <br> <br>   <br>

            <h4 style="text-align: left; font-size: 30px">Water Bill Details Table</h4>

        </div>
            <div class="container">
                <a href="WbillAdd" class="btn btn-primary" >Add Details</a>

            <table class="table table-dark table-hover table-bordered">

                <thead>
                <tr>
                    <th scope="col">Bill Id</th>
                    <th scope="col">Account name</th>
                    <th scope="col">Service address</th>
                    <th scope="col">Bill Period</th>
                    <th scope="col">Bill Date</th>
                    <th scope="col">Meter Number</th>
                    <th scope="col">Past Due Amount</th>
                    <th scope="col">Current Charge</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Action</th>

                </tr>

                <tbody>
                </thead>
           @foreach($Wbill as $row)
                <tr>

                    <td> {{$row-> ID }}</td>
                    <td> {{$row-> Account_name }}</td>
                    <td> {{$row-> Service_address }}</td>
                    <td> {{$row-> Bill_Period }}</td>
                    <td> {{$row-> Bill_Date }}</td>
                    <td> {{$row-> Meter_Number }}</td>
                    <td> {{$row-> Past_Due_Amount }}</td>
                    <td> {{$row-> Current_Charge }}</td>
                    <td> {{$row-> Total_Amount }}</td>
                    <td>
                        <a href="click_edit/{{$row->ID}}" class="btn btn-primary badge-pill"style="width: 80px"> EDIT </a>

                        <a href="click_delete/{{$row->ID}}" class="btn btn-danger badge-pill" style="width: 80px"> DELETE </a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>

        </div>






</body>
</html>
