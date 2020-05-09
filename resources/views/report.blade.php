<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <Title>Welcome</Title>
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body style ="background-color:#ccb63b">
<div class="Wbill ">


    <div class="view">
        <h1 style="font-size: 60px" align="center" >Hotel Radin Pearl</h1>
        <img src="radin1_logo.png" width="600" height="700" align="left">
    </div>

<br><br><br><br>

        <h4 style="text-align: left; font-size: 30px">Monthly Report - Utility Bills</h4>

<form method="post" action="/report">


    <div class="card" style="border-color: #ccb63b; border-bottom: #ccb63b">
        <div class="card-body" style="background-color: #ccb63b">
            <table class="table table-dark table-hover table-bordered">

                <thead>
                <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Month</th>
                    <th scope="col">Water Bill.(Rs)</th>
                    <th scope="col">Electricity Bill.(Rs)</th>
                    <th scope="col">Past Due Amount.(Rs)</th>
                    <th scope="col">Total Amount.(Rs)</th>

                </tr>

                <tbody>
                </thead>
                <tr>
                    <th scope="col">2019</th>
                    <th scope="col">January</th>
                    <th scope="col">4000.00</th>
                    <th scope="col">3000.00</th>
                    <th scope="col">0.00</th>
                    <th scope="col">7000.00</th>

                </tr>
            </tbody>
            </table>
        </div>
    </div>


    {{csrf_field()}}



</form>
</div>
</body>

</html>
