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
<br><br><br><br><br>
<h4 style="font-size: 30px">Login Form</h4>

<form method="get" action="/loginPage">
    {{csrf_field()}}


    <div class="card" style="margin-right: 300px; margin-inside: 20px;margin-outside:#96714b ">
        <div class="card-body" style="background:#0c3837">

            <br><br><br>
            <div class="form-group row" >
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" name="email">
                </div>
            </div>


            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group row" style="margin-left: 100px">


                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>

            <div class="text-center">
                <a href="Submit" class="btn btn-primary" style="width: 150px; height:40px">Submit</a>
            </div>

        </div>
    </div>


</form>


</body>
</html>
