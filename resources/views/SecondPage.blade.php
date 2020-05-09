<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <Title>Button Page</Title>
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<style>
    * {
        box-sizing: border-box;
    }

    .column {
        float: left;
        width: 33.33%;
        padding: 5px;
    }

    /* Clearfix (clear floats) */
    .row::after {
        content: "";
        clear: both;
        display: table;
    }
</style>

<body style="background: #ccb63b">
<div class="ButtonPage ">
    <div class="view">

        <h1 style="font-size: 60px" align="center" >Hotel Radin Pearl</h1>

        <div class="text-left">
            <img src="radin1_logo.png" width=300" height="300" >

        </div>

        <form method="post" action="/SecondPage">
            {{csrf_field()}}


            <div class="column">
                <a href="/room"  name = "room" value = "myimage1">
                    <img src="images/room.jpg " height="300" width="300" style="margin-left: 16px"/>
                </a>
                <div class="top-right" style="margin-left: 16px; font-size: 22px" ><b>Room Reservation</b></div>
            </div>

            <div class="column">
                <a href="/event"  name ="event" value = "myimage2">
                    <img src="images/Eve.jpeg " height="300" width="300"/>
                </a>
                <div class="top-right" style=" font-size: 22px" ><b>Event Management</b></div>
            </div>



            <div class="column">
                <a href="/res"  name = "res" value = "myimage3">
                    <img src="images/res.jpg " height="300" width="300" />
                </a>
                <div class="top-right" style=" font-size: 22px" ><b>Restaurant and Menu Management</b></div>
            </div>


            <div class="column">
                <a href="/house"  name = "house" value = "myimage4">
                    <img src="images/house.jpg " height="300" width="300"; style="margin-left: 16px;S" />
                </a>
                <div class="top-right" style="margin-left: 16px; font-size: 22px" ><b>HouseKeeping</b></div>
            </div>

            <div class="column">
                <a href="/emp"  name = "emp" value = "myimage4">
                    <img src="images/emp.jpg " height="300" width="300" />
                </a>
                <div class="top-right" style=" font-size: 22px" ><b>Employee Management</b></div>
            </div>

            <div class="column">
                <a href="/inven"  name = "inven" value = "myimage5">
                    <img src="images/inven.jpg " height="300" width="300" />
                </a>
                <div class="top-right" style=" font-size: 22px" ><b>Inventory Management</b></div>
            </div>


            <div class="column">
                <a href="/pay"  name = "pay" value = "myimage5">
                    <img src="images/pay.jpg " height="300" width="300"; style="margin-left: 16px;S" />
                </a>
                <div class="top-right" style="margin-left: 16px; font-size: 22px" ><b>Payment Management</b></div>
            </div>


            <div class="column">
                <a href="/finance"  name = "finance" value = "myimage6" >
                    <img src="images/finance.jpg " height="300" width="300" />
                </a>
                <div class="top-right" style=" font-size: 22px" ><b>Finance Management</b></div>
            </div>


        </form>

    </div>

</div>
</div>



</body>

</html>
