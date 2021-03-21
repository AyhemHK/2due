
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>2due</title>

</head>
<header id="top" class="w-full flex flex-col fixed sm:relative bg-white pin-t pin-r pin-l">
    <nav id="site-menu" class="flex flex-col sm:flex-row w-full justify-between items-center px-4 sm:px-6 py-1 bg-white shadow sm:shadow-none border-b-4 border-teal-500">
        <div class="w-full sm:w-auto self-start sm:self-center flex flex-row sm:flex-none flex-no-wrap justify-between items-center">
            <a href="../" class="no-underline py-1">                  <img src="../img/logo.png" height="128" width="32">
            </a>
            <button id="menuBtn" class="hamburger block sm:hidden focus:outline-none" type="button" onclick="navToggle();">
                <span class="hamburger__top-bun"></span><span class="hamburger__bottom-bun"></span>
            </button>
        </div>
        <div id="menu" class="w-full sm:w-auto self-end sm:self-center sm:flex flex-col sm:flex-row items-center h-full py-1 pb-4 sm:py-0 sm:pb-0 hidden">
            <a class="text-dark font-bold hover:text-red text-lg w-full no-underline sm:w-auto sm:pr-4 py-2 sm:py-1 sm:pt-2" href="./">Register</a>
            <a class="text-dark font-strong hover:text-red text-lg w-full no-underline sm:w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#P3L">Features</a>
        </div>
    </nav>
</header>
<main class="content bg-teal-100">
    <div class="min-h-screen text-center mx-auto py-24">





        <h1 class="text-4xl text-teal-500">Registration.</h1>


        <div class="py-6">
            <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
                <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image:url('https://images.unsplash.com/photo-1546514714-df0ccc50d7bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80')"></div>
                <div class="w-full p-8 lg:w-1/2">
                    <h2 class="text-2xl font-semibold text-gray-700 text-center">Brand</h2>
                    <p class="text-xl text-gray-600 text-center">Welcome back!</p>
                    <a href="#" class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
                        <div class="px-4 py-3">
                            <svg class="h-6 w-6" viewBox="0 0 40 40">
                                <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z" fill="#FFC107"/>
                                <path d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z" fill="#FF3D00"/>
                                <path d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z" fill="#4CAF50"/>
                                <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z" fill="#1976D2"/>
                            </svg>
                        </div>
                        <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">Sign in with Google</h1>
                    </a>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 lg:w-1/4"></span>
                        <a href="#" class="text-xs text-center text-gray-500 uppercase">or login with email</a>
                        <span class="border-b w-1/5 lg:w-1/4"></span>
                    </div>
                    <form action="login.php" method="post">
                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                        <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="uid">
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                            <a href="#" class="text-xs text-gray-500">Forget Password?</a>
                        </div>
                        <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" name="pwd">
                    </div>
                    <div class="mt-8">
                        <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Login</button>
                    </div>
                    </form>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 md:w-1/4"></span>
                        <a href="#" class="text-xs text-gray-500 uppercase">or sign up</a>
                        <span class="border-b w-1/5 md:w-1/4"></span>
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
<!-- start footer -->
<footer class="relative bg-white px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 pt-12 pb-10 text-center sm:text-left">
    <div class="flex flex-col sm:flex-row sm:flex-wrap">
        <div class="sm:w-1/2 lg:w-1/5">
            <h6 class="text-sm text-gray-600 font-bold uppercase">Directory</h6>
            <ul class="mt-4">
                <li><a href="#">Contact Us</a></li>
                <li class="mt-2"><a href="#">Login</a></li>
                <li class="mt-2"><a href="#">Get Started</a></li>

            </ul>
        </div>

        <div class="mt-8 sm:w-1/2 sm:mt-0 lg:w-1/5 lg:mt-0">
            <h6 class="text-sm text-gray-600 font-bold uppercase">Legal</h6>
            <ul class="mt-4">
                <li class="mt-2"><a href="#">Imprint</a></li>
                <li class="mt-2"><a href="#">Privacy Policy</a></li>
                <li class="mt-2"><a href="#">Terms of Use</a></li>
            </ul>
        </div>

        <div class="mt-8 sm:w-1/2 sm:mt-12 lg:w-1/5 lg:mt-0">
            <h6 class="text-sm text-gray-600 font-bold uppercase">Contact</h6>
            <ul class="mt-4">
                <li><a href="#">hello@2due.com</a></li>
                <li class="mt-2"><a href="#">+62 202 5post55 0117</a></li>
            </ul>
        </div>

        <div class="mt-12 sm:w-1/2 lg:w-2/5 lg:mt-0 lg:pl-12">
            <div>
                <img src="img/logo.png" height="128" width="32">
            </div>

            <p class="text-base text-gray-600 mt-4">Committed to helping you stay on track through personal project management</p>
        </div>
    </div>

    <div class="mt-16">
        <hr class="mb-8">
        <p class="text-sm text-gray-600">2021 © Imperfect and Company. All rights reserved.</p>
    </div>
</footer>
<!-- end footer -->


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


</body>

</html>