
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style type="text/css">
        .ml {
            margin-left: 50%;
            width: 35%;
            margin-top: -13%;
        }
    </style>
    
    <script>
        onCheckIn = () => {
            // set time
            var cdate = new Date();
            var time = `${cdate.getHours()}:${cdate.getMinutes()}:${cdate.getSeconds()}`;

            var btnCheckout = document.getElementById("checkIn").value;
            var btnStyle = document.getElementById("checkIn").className;
            if (btnCheckout == "Check Me In") {
                document.getElementById("checkIn").value = "Check Me Out";
                document.getElementById("checkIn").className = "btn btn-success";
                document.getElementById("checkInTime").innerHTML= time;
            }
            else {
                document.getElementById("checkIn").value = "Check Me In";
                document.getElementById("checkIn").className = "btn btn-primary";
                document.getElementById("checkOutTime").innerHTML= time;
            }
        }
    </script>
</head>
<body>
    <div class="wrap">
        <div style="margin-left: 15%; margin-top: 2%">
            <h2 class="welcome" style="color: black;">Welcome, <span style="color: red; font-weight: bold;"><?= $this->session->userdata('userSession'); ?><span></h2>
            <h2 style="color:#E98B33">Now : <span class="time"></span></h2>
            <h2 class="date"></h2>
        </div>
        <br/>
        <!-- check in -->
        <!-- <form action="Panel_staff/checkInOut" method="post"> -->
            <input type='button' class="btn btn-primary" style="margin-left: 20%;" 
                    id = "checkIn" onclick='onCheckIn()' value='Check Me In'>
        <!-- </form> -->
        </div>
        <br/>

        <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-sm ml">
            <table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
              <thead class="thead-dark|thead-light">
                <tr>
                  <th scope="col">Check in</th>
                  <th scope="col">Check Out</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td id="checkInTime"></td>
                  <td id="checkOutTime"></td>
                </tr>
              </tbody>
            </table>
        </div>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function(){
            function crDate(){
                var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                var cdate = new Date();
                var date = `Date: ${cdate.getDate()}, ${months[cdate.getMonth()]} , ${cdate.getFullYear()}`;
                return date;
            }
            $(".date").text(crDate());

            function clock(){
                var cdate = new Date();
                var time = `${cdate.getHours()}:${cdate.getMinutes()}:${cdate.getSeconds()}`;
                return time;
            }

            setInterval(function(){
                $(".time").text(clock());
            },1000);
        });

    </script>
</body>
</html>