
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<link rel="icon" href="./favicon.png">
    <title>2due</title>
    <style>
        .cool-animate-gradient-on-hover{
            /*background-size: 100%;*/
            /*background-image: linear-gradient(#fff, #fff);*/
            border-radius: 0.45rem;
            /*border: 1px solid #ddd;*/
            cursor: pointer;
            color: #333;
            /*display: inline-block;*/
            font-size: 1.25rem;
            font-weight: 300;
            /*padding: 1rem 1.5rem;*/
            position: relative;
            z-index: 100;
            /*transition: opacity 1.0s;*/
        }
        .cool-animate-gradient-on-hover:before{
            /*border-radius: inherit;*/
            background-image: linear-gradient(#fff,#b5b5ff);
            content: '';
            /*display: block;*/
            height: 100%;
            position: absolute;
            top: 0; left: 0;
            opacity: 0;
            width: 100%;
            z-index: -100;
            transition: opacity .5s;
        }
        .cool-animate-gradient-on-hover:hover:before{
            opacity: 1;
        }

        .gradient-animator-calm{

        }
        .gradient-animator-calm:before{
            background-image: linear-gradient(#fff,#b5b5ff);
        }
        .gradient-animator-calm:hover:before{

        }
        gradient-animator-alert{

        }
        .gradient-animator-alert:before{
            background-image: linear-gradient(#fff,#ffff80);
        }
        .gradient-animator-alert:hover:before{

        }
        gradient-animator-urgent{

        }
        .gradient-animator-urgent:before{
            background-image: linear-gradient(#fff,#ffb7b5);
        }
        .gradient-animator-urgent:hover:before{

        }
        header{

        }
        nav{

        }
        main{

        }
        div{

        }
    </style>
</head>
<body>
<header id="top" class="w-full flex flex-col fixed sm:relative bg-white pin-t pin-r pin-l">
    <nav id="site-menu" class="flex flex-col sm:flex-row w-full justify-between items-center px-4 sm:px-6 py-1 bg-white shadow sm:shadow-none border-b-4 border-teal-500">
        <div class="w-full sm:w-auto self-start sm:self-center flex flex-row sm:flex-none flex-no-wrap justify-between items-center">
            <a href="./" class="no-underline py-1">                  <img src="img/logo.png" height="128" width="32">
            </a>
            <button id="menuBtn" class="hamburger block sm:hidden focus:outline-none" type="button" onclick="navToggle();">
                <span class="hamburger__top-bun"></span><span class="hamburger__bottom-bun"></span>
            </button>
        </div>
        <div id="menu" class="w-full sm:w-auto self-end sm:self-center sm:flex flex-col sm:flex-row items-center h-full py-1 pb-4 sm:py-0 sm:pb-0 hidden">
            <a class="text-dark font-strong hover:text-red text-lg w-full no-underline sm:w-auto sm:pr-4 py-2 sm:py-1 sm:pt-2" href="register/">Register</a>
            <a class="text-dark font-strong hover:text-red text-lg w-full no-underline sm:w-auto sm:pr-4 py-2 sm:py-1 sm:pt-2" href="login/">Login</a>
        </div>
    </nav>
</header>
<main class="content bg-teal-100">
    <div class=" text-center mx-auto py-24">





        <h1 class="text-4xl text-teal-500">Prioritize your goals.</h1>




        <!-- Component Start -->
        <div class="flex p-10 space-x-4 overflow-auto text-gray-700 justify-center mx-auto"  style="text-align: center;">
            <div class="flex flex-col  w-64 bg-gray-200 border border-gray-300"  style="text-align: center;">
                <div class="flex items-center justify-between h-10 px-2 border-b border-gray-300 bg-white" style="justify-content: center">
                    <span class="block text-sm font-medium">Could do</span>
                </div>

                <div class="flex flex-col px-2 pb-2 ">
                    <div class="brother cool-animate-gradient-on-hover gradient-animator-calm p-6 mt-2 border border-gray-300 bg-white cursor-pointer">Homework</div>
                    <div class="cool-animate-gradient-on-hover gradient-animator-calm p-6 mt-2 border border-gray-300 bg-white cursor-pointer">Gym</div>
                    <div class="cool-animate-gradient-on-hover gradient-animator-calm p-6 mt-2 border border-gray-300 bg-white cursor-pointer">Cook</div>

                </div>
            </div>
            <div class="flex pt-10 pb-10 space-x-4 overflow-auto text-gray-700">
                <div class="flex flex-col  w-64 bg-gray-200 border border-gray-300">
                    <div class="flex items-center justify-between  h-10 px-2 border-b border-gray-300 bg-white" style="justify-content: center">
                        <span class="block text-sm font-medium">Should do</span>

                    </div>
                    <div class="flex flex-col px-2 pb-2 ">
                        <div class="cool-animate-gradient-on-hover gradient-animator-alert p-6 mt-2 border border-gray-300 bg-white cursor-pointer">Study for exam</div>
                        <div class="cool-animate-gradient-on-hover gradient-animator-alert p-6 mt-2 border border-gray-300 bg-white cursor-pointer">Fasfa	</div>
                    </div>
					
                </div>
                <div class="flex pt-10 pb-10 space-x-4 flex-shrink	 overflow-auto text-gray-700">
                    <div class="flex flex-col  w-64 bg-gray-200 border border-gray-300">
                        <div class="flex items-center justify-between 0 h-10 px-2 border-b border-gray-300 bg-white" style="justify-content: center">
                            <span class="block text-sm font-medium">Must do</span>

                        </div>
                        <div class="flex flex-col px-2 pb-2 ">
                            <div class="cool-animate-gradient-on-hover gradient-animator-urgent p-6 mt-2 border border-gray-300 bg-white cursor-pointer">Register for classes</div>
                        </div>
                    </div>
					
					</div>

					</div>

                </div>
				</div>
</main>

<style>
    /* custom non-Tailwind CSS */

    @media (max-width: 576px) {
        .content {
            padding-top: 51px;
        }
    }

    @media (min-width: 577px) {
        .pt-scroll {
            padding-top: 51px;
        }

        .nav-sticky {
            position: fixed!important;
            min-width: 100%;
            top: 0;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .1);
            transition: all .25s ease-in;
            z-index: 1;
        }
    }

    /* HAMBURGER MENU */

    .hamburger {
        cursor: pointer;
        width: 48px;
        height: 48px;
        transition: all 0.25s;
    }

    .hamburger__top-bun,
    .hamburger__bottom-bun {
        content: '';
        position: absolute;
        width: 24px;
        height: 2px;
        background: #000;
        transform: rotate(0);
        transition: all 0.5s;
    }

    .hamburger:hover [class*="-bun"] {
        background: #333;
    }

    .hamburger__top-bun {
        transform: translateY(-5px);
    }

    .hamburger__bottom-bun {
        transform: translateY(3px);
    }

    .open {
        transform: rotate(90deg);
        transform: translateY(-1px);
    }

    .open .hamburger__top-bun {
        transform:
                rotate(45deg)
                translateY(0px);
    }

    .open .hamburger__bottom-bun {
        transform:
                rotate(-45deg)
                translateY(0px);
    }
</style>

<script>
    var nav = document.getElementById('site-menu');
    var header = document.getElementById('top');

    window.addEventListener('scroll', function() {
        if (window.scrollY >=400) { // adjust this value based on site structure and header image height
            nav.classList.add('nav-sticky');
            header.classList.add('pt-scroll');
        } else {
            nav.classList.remove('nav-sticky');
            header.classList.remove('pt-scroll');
        }
    });

    function navToggle() {
        var btn = document.getElementById('menuBtn');
        var nav = document.getElementById('menu');

        btn.classList.toggle('open');
        nav.classList.toggle('flex');
        nav.classList.toggle('hidden');
    }
</script>
<?php include_once('footer.php') ?>



<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script>
    $('.navbar-toggler').click(function () {
        $(this).toggleClass('active');
        $('.navigation-menu').toggleClass('hidden');
        $('#navbar').addClass('bg-white');
    });

    $(function () {
        var navigation = $("#navbar");

        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 10) {
                navigation.addClass("bg-white xl:py-4 shadow-md");
                navigation.removeClass("xl:py-8");
            } else {
                navigation.removeClass("bg-white xl:py-4 shadow-md");
                navigation.addClass("xl:py-8");
            }
        });
    });
</script>
<?php include_once('footer.php') ?>

</body>

</html>