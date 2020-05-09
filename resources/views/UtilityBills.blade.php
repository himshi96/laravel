<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <Title>Welcome</Title>
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>
<body style ="background-color:#ccb63b">
<div class="Wbill ">


    <div class="view">
        <h1 style="font-size: 60px" align="center" >Hotel Radin Pearl</h1>
        <img src="radin1_logo.png" width="600" height="700" align="left">
    </div>
</div>
<br><br><br><br><br><br><br><br>
            <form method="post" action="/bill">
            {{csrf_field()}}

                <label for="cars" >Choose a Year:</label>

                <select id="cars" style="background: #b8b894">
                    <option value="year">2016</option>
                    <option value="year">2017</option>
                    <option value="year">2018</option>
                    <option value="year">2019</option>
                    <option value="year">2020</option>
                </select>

                <label for="cars" style="margin-left: 100px">Choose a Month:</label>

                <select id="cars"style="background: #b8b894">
                    <option value="year">January</option>
                    <option value="year">February</option>
                    <option value="year">March</option>
                    <option value="year">April</option>
                    <option value="year">May</option>
                    <option value="year">June</option>
                    <option value="year">July</option>
                    <option value="year">August</option>
                    <option value="year">September</option>
                    <option value="year">October</option>
                    <option value="year">November</option>
                    <option value="year">December</option>
                </select>


            </form>
<br><br><br>
<a href="btn" class="btn btn-dark" style="width: 50px; height:40px">GO</a>
</body>

</html>
