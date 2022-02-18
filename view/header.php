<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in to Westpac Online Bank</title>
    <link rel="stylesheet" href="../css/header.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <style>
        @media only screen and (max-width: 1200px) {
            .navbottom {
                height: 200px;


            }

            .mobileheader {
                display: block;
            }

            .ok {
                height: 450px;
            }

            @media only screen and (max-width: 800px) {
                .navbottom {
                    display: none;
                }

                .banner {
                    display: none;
                }

                .navtop {
                    display: none;
                }

                .footerall {
                    display: none;
                }

                .footerBottom {
                    display: block;

                }

                footer {
                    height: 250px !important;
                }
                main{
                    min-height: 250px !important;
                    margin-left: 40px !important;
                }
            }
    </style>

    <header>
        <div class="banner container-expand-gl row ">
            <div class="col-1">
                <img src="../images/info.png" alt="" style="width:25px; height:25px; margin:8px;">

            </div>
            <div class="col-10">
                We use cookies to secure and tailor your web use. Our <u><strong> <a href="https://www.westpac.com.au/privacy/cookies/?fid=wbcbanking:alert:updated-cookies-policy">notice</a> </strong></u> explains how we use cookies and how you can manage them. By continuing to use this site, we assume you're ok with our notice.

            </div>
            <div id="close" class="col-1" onclick="closebanner();">
                <img src="../images/close.png" alt="" style="width:25px; height:25px;margin:8px;" onclick="closebanner();">

            </div>

        </div>

        <div class=" container-expand-gl  row navtop ">
            <div class="col-6">

            </div>

            <div class="col-6">
                <a href=""> Lost or stolen cards</a>



                <a href=""> Contact us </a>



                <a href=""> Locate us </a>



                <strong> <a href=""> Register for Westpac Online Banking</a></strong>


            </div>

        </div>


        <div class="navbottom row p-0 m-0">
            <div class="col-2 ">
                <img src=" ../images/westpac.png" alt="" style="width:85px; height:45px;margin:20px 90px;    padding-right:20px;">

            </div>
            <div class="col-1" style="border-right: solid rgba(194, 192, 192, 0.308) 0.001px; margin:20px;">

            </div>

            <div class="col-5">
                <ul style="list-style-type: none; ">
                    <li><a href="">Home</a></li>
                    <li style="border-bottom: 3px solid #DA1710;"><a href="">Personal</a></li>
                    <li><a href=""> Business</a></li>
                    <li><a href=""> Corporate</a></li>
                    <li><a href=""> About us</a></li>
                </ul>

            </div>
            <div class="col-2=1">
            </div>

        </div>
        <script src="../js/script.js"></script>
        <div class="mobileheader row" style="background-color: white; width: 106%;   ">
            <div class="col-2 ">
                <img src=" ../images/westpac.png" alt="" style="width:85px; height:45px;margin:20px 90px;    padding-right:20px;">
                &nbsp;
            </div>
        </div>
        <br> <br>


    </header>
    <style>
        .mobileheader {
            display: none;
        }

        @media only screen and (max-width: 800px) {

            .mobileheader {
                display: block;
                height: 90px;
                padding: 5px;
                border-bottom: rgba(194, 192, 192, 0.308) solid 0.00001px;
                solid;
            }

        }
    </style>