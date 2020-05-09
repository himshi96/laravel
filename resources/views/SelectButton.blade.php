<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <Title>loginPage</Title>
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body style ="background-color:#ccb63b">
<div class="bill">
    <div class="text-left">
        <img src="radin1_logo.png" width=600" height="700" align="left">

        <h1 style="font-size: 60px"  >Hotel Radin Pearl</h1>
    </div>
</div>

<br><br><br><br><br><br>
<form method="post" action="/SelectButton">
    {{csrf_field()}}
    <br><br><br><br>
    <div class="text-center">
        <a href="/Water_Bills" class="btn btn-dark" style="width: 400px; height:60px">Water Bills</a>
    </div>
    <br><br><br><br>
    <div class="text-center">
        <a href="/Electricity_Bills" class="btn btn-dark" style="width: 400px; height:60px">Electricity Bills</a>
    </div>
    <br><br><br><br>
    <div class="text-center">
        <a href="Finance_Activities" class="btn btn-dark" style="width: 400px; height:60px">Financial Activities</a>
    </div>


</form>
</body>
</html>
