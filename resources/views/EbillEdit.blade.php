<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <Title>ElectricityBillPage</Title>
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body style ="background-color:#ccb63b">
<div class="Ebill">
    <img src="images/radin.png" width=600" height="700" align="left">
    <div class="text-left">



        <h1 style="font-size: 60px"  >Hotel Radin Pearl</h1>

        <br>    <br>    <br>
        <h4 style="font-size: 30px">Electricity Bill</h4>
        <br>
        <!-- starts coding in bootstrap-->



        <form method="post" action="/update/{{$Ebill[0]->ID }}">
            {{csrf_field()}}


            <div class="form-group row">
                <label for="AccName" class="col-sm-2 col-form-label">Account Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Account_name" value="{{$Ebill[0]-> Account_name }}"  placeholder="Name">
                </div>
            </div>


            <div class="form-group row">
                <label for="Address" class="col-sm-2 col-form-label">Service Address</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Service_address" value="{{$Ebill[0]->Service_address }}"  placeholder="Address">
                </div>
            </div>


            <div class="form-group row">
                <label for="bill" class="col-sm-2 col-form-label">Bill Date</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="Bill_Date"  value="{{$Ebill[0]-> Bill_Date }}"  placeholder="Date">
                </div>
            </div>

            <div class="form-group row">
                <label for="No" class="col-sm-2 col-form-label">Past Due Amount</label>
                <div class="col-sm-5">
                    <input type="number" min="1" step="any" class="form-control" name="Past_Due_Amount"  value="{{$Ebill[0]-> Past_Due_Amount }}"  placeholder="Amount">
                </div>
            </div>



            <div class="form-group row">
                <label for="amount" class="col-sm-2 col-form-label">Current Charge</label>
                <div class="col-sm-5">
                    <input type="number" min="1" step="any" class="form-control" name="Current_Charge"  value="{{$Ebill[0]-> Current_Charge }}"  placeholder="Amount">
                </div>
            </div>


            <div class="form-group row">
                <label for="amount" class="col-sm-2 col-form-label">Total Amount</label>
                <div class="col-sm-5">
                    <input type="number" min="1" step="any" class="form-control" name="Total_Amount" value="{{$Ebill[0]-> Total_Amount }}"  placeholder="Amount">
                </div>
            </div>

            <div class="form-group row">
                <label for="bill" class="col-sm-2 col-form-label">Due Date</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="Due_Date"  value="{{$Ebill[0]-> Due_Date }}"  placeholder="Date">
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
