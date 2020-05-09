<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <Title>WaterBillPage</Title>
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body style ="background-color:#ccb63b">
<div class="Wbill">
    <img src="images/radin.png" width=600" height="700" align="left">
    <div class="text-left">



        <h1 style="font-size: 60px"  >Hotel Radin Pearl</h1>

        <br>    <br>    <br>
        <h4 style="font-size: 30px">Water Bill</h4>
        <br>
        <!-- starts coding in bootstrap-->

        <form method="post" action="/update/{{$Wbill[0]->ID }}">
            {{csrf_field()}}


            <div class="form-group row">
                <label for="AccName" class="col-sm-2 col-form-label">Account Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Account_name" value="{{$Wbill[0]-> Account_name }}"  placeholder="Name">
                </div>
            </div>


            <div class="form-group row">
                <label for="Address" class="col-sm-2 col-form-label">Service Address</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Service_address" value="{{$Wbill[0]-> Service_address }}"  placeholder="Address">
                </div>
            </div>

            <div class="form-group row">
                <label for="bill" class="col-sm-2 col-form-label">Bill Period</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="Bill_Period"  value="{{$Wbill[0]-> Bill_Period }}"  placeholder="Date">
                </div>
            </div>


            <div class="form-group row">
                <label for="bill" class="col-sm-2 col-form-label">Bill Date</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="Bill_Date"  value="{{$Wbill[0]-> Bill_Date }}"  placeholder="Date">
                </div>
            </div>

            <div class="form-group row">
                <label for="No" class="col-sm-2 col-form-label">Meter Number</label>
                <div class="col-sm-5">
                    <input type="number" min="1" step="any" class="form-control" name="Meter_Number"  value="{{$Wbill[0]-> Meter_Number }}"  placeholder="Number">
                </div>
            </div>

            <div class="form-group row">
                <label for="amount" class="col-sm-2 col-form-label">Past Due Amount</label>
                <div class="col-sm-5">
                    <input type="number" min="1" step="any" class="form-control" name="Past_Due_Amount"  value="{{$Wbill[0]-> Past_Due_Amount }}"  placeholder="Amount">
                </div>
            </div>


            <div class="form-group row">
                <label for="amount" class="col-sm-2 col-form-label">Current Charge</label>
                <div class="col-sm-5">
                    <input type="number" min="1" step="any" class="form-control" name="Current_Charge"  value="{{$Wbill[0]-> Current_Charge }}"  placeholder="Amount">
                </div>
            </div>


            <div class="form-group row">
                <label for="amount" class="col-sm-2 col-form-label">Total Amount</label>
                <div class="col-sm-5">
                    <input type="number" min="1" step="any" class="form-control" name="Total_Amount" value="{{$Wbill[0]-> Total_Amount }}"  placeholder="Amount">
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-5 offset-sm-2">
                    <button type="submit" class="btn btn-primary">UPDATE DATA </button>
                </div>
            </div>
        </form>
    </div>

</div>


</body>
</html>
