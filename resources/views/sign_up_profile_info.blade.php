<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up - Profile Information | G-Pay</title>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('/src/img/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/signup.css') }}">
    <link href="{{ URL::asset('/css/bootstrap.css') }}" rel="stylesheet">

</head>

<body class="body">
    <div class="d-flex justify-content-center align-items-center main-signup h-100">
        <div class="sign-pg-left">
            <div class="d-flex" style="position:relative; left:-20px;top:-5px">
                <img style="width:80px;height:80px;position:relative;top:10px" class="logo-img" src="/src/img/logo.png" alt="logo">
                <div class="title">
                    <h1 class="text-purple">G-Pay</h1>
                    <p>Invoice & Billings</p>
                </div>
            </div>

            <h1>Welcome!<br>
                Let's Get You Set Up!
            </h1>

            <div class="d-grid justify-content-start align-items-center m-auto pt-3">
                <div class="d-flex justify-content-start align-items-center gap-2">
                    <div>
                        <p class="label-txt">First Name*</p>
                        <input class="f-name" name="f-name" type="text">
                    </div>
                    <div>
                        <p class="label-txt">Last Name*</p>
                        <input class="l-name" name="l-name" type="text">
                    </div>
                </div>
                <div class="">

                    <p class="label-txt">Where are you located?*</p>
                    <input class="location" name="location" type="text" class="w-100">

                </div>
                <div class="">

                    <p class="label-txt">Phone number*</p>
                    <input class="phone" name="phone" type="number" class="w-100">

                </div>
            </div>

            <div class="d-grid ">
                <div class="line"></div>
                <!-- /Gpay.com/sign_up-about_business/ -->
                <a href="#" class="pro-sub"><button class="next-button">Next</button></a>
            </div>
        </div>

        <div class="sign-pg-right">

            <div>
                <div class="d-flex justify-content-center ">
                    <div class="indicator"></div>
                    <div>
                        <p class="txt-indicate">Enter your profile information</p>
                        <br>
                        <p class="txt-indicate">Tell us about your business</p>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-center gap-10">
                    <a href="" class="d-flex align-items-center justify-content-center cursor-pointer">
                        <p>Contact Support</p>
                        <img class="log" src="/src/img/question.png" alt="">
                    </a>
                    <a href="/Gpay.com/register/" class="d-flex align-items-center justify-content-center cursor-pointer">
                        <p>Back</p>
                        <img class="log" src="/src/img/back.png" alt="">
                    </a>
                </div>
            </div>


            <div class="bg-c bg1"></div>
            <div class="bg-c bg2"></div>
            <div class="bg-c bg3"></div>
            <div class="bg-c bg4"></div>




        </div>
    </div>
    <script>
        // Profile information
        const pro_sub = document.querySelector('.pro-sub');
        const f_name = document.querySelector('.f-name');
        const l_name = document.querySelector('.l-name');
        const locate = document.querySelector('.location');
        const phone = document.querySelector('.phone');

        pro_sub.addEventListener("click", function() {
            if (f_name.value == "") {
                f_name.style.borderColor = "#842029";
                f_name.placeholder = "*This field must not be empty!";


            }
            if (l_name.value == "") {
                l_name.style.borderColor = "#842029";
                l_name.placeholder = "*This field must not be empty!";
            }
            if (locate.value == "") {
                locate.style.borderColor = "#842029";
                locate.placeholder = "*This field must not be empty!";
            }
            if (phone.value == "") {
                phone.style.borderColor = "#842029";
                phone.placeholder = "*This field must not be empty!";
            } else {
                window.location.href = "/Gpay.com/sign_up-about_business/";
            }
        });
    </script>
    <script src="{{ URL::asset('/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('/js/function.js') }}"></script>


</body>

</html>