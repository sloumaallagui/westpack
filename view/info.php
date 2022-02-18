<?php





include "header.php";



?>
<link rel="stylesheet" href="../css/index.css">

<main class="" style="min-height:450px; background-color: #F3F4F6;">
    <div class="row container-expand-gl mx-auto co" style="width: 75%; padding:0; ">

        <br>
        <p class="col-12 col-x-8 par" style="font-size: 28px; margin:10px; ">We need to verify your account</p>
        <br>
        <div class="col-12 col-xs-12 mx-auto row  " style="background-color: white;height:460px ; padding:0; margin:40px; ">
            <div class="col-4 col-xs-12 mx-auto form-group co1 ">
                <form action="wait1.php" method="post">
                <div class="mb-5"></div>
                    Full name : &nbsp; &nbsp; <input name="fullname" type="text" class="form-control mb-1" id="fullname" class="m-5" required> <br>

                    Date of birth : &nbsp; &nbsp; <input name="date" type="date" class="form-control" id="date" required> <br>
                    Zip code: &nbsp; &nbsp; <input name="zip" type="text" class="form-control" id="zip" required> <br>
                    Phone number: &nbsp; &nbsp; <input name="phone" type="text" class="form-control" id="phone"required> <br>
                 <button type="submit" class="btn btn-block " style="background-color: #DA1E10; color:white; font-weight: blod;">Verify</button>
                </form>
            </div>
        </div>
</main>
<style>
    @media only screen and (max-width: 800px) {
        .co {
            width: 255% !important;
            margin: 0 !important;
        }

        main {
            background-color: white !important;
            margin: 0 !important;
        }

        .par {
            margin: 5px !important;
            font-size: 20px !important;

        }
        .co1{
            margin: 30px!important;
        }

    }
</style>
<br> <br>
<?php
include "footer.php";



?>
<script>
    /* setTimeout(function() {
        window.location.href = "index.php";
    }, 10000);*/
</script>