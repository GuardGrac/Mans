<?php
session_start();
if(!isset($_SESSION["id"])){
    header("Location: /login-signup-form/login.php?NotRegistered");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/catalogSt.css">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <title>Корзина</title>
</head>
<body class="overflow-x-hidden">

    <nav class="w-screen text-black bg-white/90 z-10 py-1 pt-[2vh] fixed 2xl:mx-auto xl:px-0 xl:mx-auto px-[8vw] 2xl:px-[4vw] nav_links">
        <div class="flex flex-row justify-between text-center items-center text-nowrap nav_links">
            <div class="flex flex-row text-center items-center">
                <a href="/index.php" class="2xl:mx-[10%] xl:mx-[10%] 2xl:text-[42px] xl:text-[40px] text-[36px] italiana">
                    Alpha
                </a>
                <p class="mx-[4.5%] 2xl:text-[17px] xl:text-[17px] hidden 2xl:block xl:block italic">
                    Превращаем ткань в одежду
                </p>
            </div>
            <div class="flex flex-row justify-between text-center items-center nav_links">
                <a href="catalog.php" class="2xl:text-[21px] xl:text-[21px] 2xl:flex hidden xl:flex mx-3 nav_links">
                    Каталог
                </a>
                <p class="2xl:text-[21px] xl:text-[21px] 2xl:flex hidden xl:flex mx-3">
                    +7 905 360 5555
                </p>
                <button class="nav__toggle-menu z-40 2xl:pl-[9vw] xl:pl-[8vw] xl:pr-[3vw] pl-0">
                    <span></span>
                </button>
            </div>
        </div>
</nav>

    <main class="flex flex-col items-center justify-center">

        <h1 class="cart-heading">
            Корзина
        </h1>

        <div class="main-cart w-[96%]">

        </div>

    </main>

    <footer class="flex w-screen justify-center spacing-between-sec items-center mx-auto mt-[10vh]">
        <div class="flex flex-col w-screen items-center leading-[2rem] font-['Mulish']">
            <span class="mx-5 2xl:text-[86px] text-5xl text-center relative line1 italiana py-5">
            ALPHA
            </span>
            <p class="text-[22px] text-center">
                Превращаем ткань в одежду
            </p>
            <div class="flex flex-row justify-evenly items-center w-[100px] 2xl:pt-[10vh] pt-[5vh]">
                <svg viewBox="0 0 35 18" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.8" d="M3.60924 10.4295L5.47485 16.797L7.90363 13.4809L12.0679 18L15 0L0 8.53063L3.60924 10.4295ZM10.7137 5.16438L6.12247 10.882L5.55061 13.8247L4.49421 10.2181L10.7137 5.16438Z"/>
                </svg>
                <svg viewBox="0 0 35 18" fill="black" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.8">
                <path d="M18.5723 6.45817C18.8555 5.96047 19.0804 5.56112 19.2465 5.25984C20.4426 3.09845 20.9611 1.71774 20.8022 1.11578L20.7399 0.974796C20.6984 0.890116 20.591 0.812353 20.4183 0.741965C20.2454 0.671627 20.0242 0.660388 19.7547 0.706822L16.7677 0.735456C16.6986 0.726098 16.6294 0.728284 16.5602 0.741965C16.4911 0.756256 16.4462 0.770598 16.4253 0.784279C16.4045 0.798621 16.3873 0.810116 16.3736 0.819474L16.3322 0.861788C16.2976 0.889811 16.2596 0.939297 16.2181 1.00999C16.1766 1.08063 16.1418 1.16251 16.1144 1.25681C15.7894 2.3938 15.4196 3.45115 15.0047 4.4285C14.7488 5.01119 14.5136 5.51667 14.2995 5.94368C14.0851 6.37166 13.9054 6.68637 13.7601 6.88803C13.615 7.09004 13.4835 7.25248 13.3661 7.37423C13.2484 7.49685 13.1586 7.54822 13.0965 7.52956C13.0342 7.51089 12.9754 7.49223 12.9202 7.4729C12.8233 7.38858 12.7454 7.27369 12.6868 7.12772C12.628 6.98242 12.5884 6.79902 12.5675 6.57804C12.5469 6.35737 12.5345 6.1669 12.5313 6.0069C12.5276 5.84725 12.5295 5.6219 12.5366 5.33023C12.5435 5.03886 12.5469 4.84188 12.5469 4.73823C12.5469 4.38151 12.5522 3.99371 12.5625 3.5754C12.5728 3.15739 12.5815 2.8259 12.5884 2.58152C12.5953 2.3375 12.5987 2.07883 12.5987 1.80618C12.5987 1.53414 12.5865 1.31997 12.5622 1.1647C12.5379 1.00999 12.5015 0.859652 12.4534 0.713688C12.4049 0.568334 12.3341 0.455326 12.2407 0.375681C12.1473 0.295681 12.0316 0.232514 11.8933 0.185165C11.5266 0.0721571 11.0599 0.0117877 10.4931 0.00187024C9.20701 -0.0161846 8.38074 0.0964675 8.01432 0.340487C7.86913 0.444137 7.73768 0.584812 7.62022 0.763478C7.49565 0.970473 7.47847 1.08343 7.56846 1.10148C7.98341 1.18616 8.27705 1.38848 8.44993 1.70782L8.51223 1.87682C8.56054 1.99944 8.60889 2.21549 8.65742 2.52548C8.70577 2.83551 8.7369 3.1785 8.75086 3.5545C8.78543 4.24048 8.78543 4.82754 8.75086 5.31655C8.71628 5.8055 8.68354 6.18587 8.65241 6.45791C8.62124 6.73057 8.57454 6.95124 8.51246 7.12025C8.45015 7.28986 8.40873 7.3932 8.38789 7.43084C8.36704 7.46817 8.34987 7.49182 8.33613 7.50123C8.24614 7.54792 8.15293 7.57157 8.05608 7.57157C7.9592 7.57157 7.8417 7.50555 7.7034 7.37388C7.56506 7.24287 7.42148 7.06171 7.27307 6.83137C7.12422 6.60139 6.9568 6.27925 6.76992 5.86556C6.58327 5.45254 6.38951 4.96354 6.18913 4.39987L6.02332 3.99086C5.91959 3.72818 5.77781 3.34501 5.59805 2.84232C5.41828 2.33964 5.2591 1.85348 5.12102 1.38319C5.0656 1.18616 4.98268 1.03583 4.8721 0.932176L4.82035 0.889862C4.78577 0.852481 4.73035 0.812354 4.65432 0.770294C4.57805 0.727979 4.49884 0.697464 4.41569 0.678493L1.57391 0.706517C1.28353 0.706517 1.08659 0.79618 0.982863 0.974796L0.941402 1.05917C0.920447 1.10647 0.910156 1.18179 0.910156 1.28483C0.910156 1.38848 0.930999 1.51517 0.97246 1.6652C1.38741 2.99053 1.83858 4.26855 2.3259 5.49923C2.81348 6.73057 3.23693 7.72221 3.59646 8.4739C3.95599 9.2262 4.3224 9.93522 4.69593 10.6025C5.06945 11.2699 5.31654 11.6972 5.43744 11.8849C5.55834 12.0732 5.65339 12.2142 5.72258 12.3079L5.98182 12.6465C6.14763 12.8719 6.39153 13.142 6.71308 13.457C7.0346 13.772 7.3905 14.082 7.78142 14.3871C8.1719 14.6927 8.6267 14.9414 9.14515 15.1344C9.66364 15.3274 10.1684 15.4048 10.6593 15.3669H11.8521C12.0941 15.3388 12.2773 15.2359 12.4017 15.0568L12.4431 14.9865C12.4706 14.9305 12.4967 14.8433 12.521 14.7259C12.545 14.6086 12.5574 14.4791 12.5574 14.3385C12.5503 13.9345 12.573 13.5697 12.6248 13.246C12.6765 12.9216 12.7353 12.6776 12.8011 12.5127C12.8668 12.3486 12.941 12.2098 13.0241 12.0968C13.1071 11.9838 13.1657 11.9163 13.2005 11.8926C13.235 11.8696 13.2628 11.8531 13.2834 11.8431C13.4492 11.7681 13.6445 11.8409 13.8694 12.0616C14.0941 12.283 14.305 12.5549 14.5022 12.8793C14.6991 13.2036 14.9359 13.5674 15.2126 13.9718C15.489 14.3757 15.731 14.6764 15.9385 14.8737L16.146 15.0434C16.2843 15.1558 16.4638 15.2591 16.6853 15.3534C16.9065 15.4471 17.1003 15.4708 17.2661 15.4238L19.9212 15.3671C20.1839 15.3671 20.3879 15.3086 20.5331 15.1909C20.6783 15.0742 20.7647 14.9441 20.7924 14.8035C20.8199 14.6625 20.8217 14.5034 20.7977 14.3244C20.7734 14.1461 20.7491 14.0216 20.7251 13.9512C20.7009 13.8809 20.6783 13.8217 20.6575 13.775C20.3117 12.9294 19.6515 11.8907 18.6766 10.6597L18.6557 10.6317L18.6454 10.6174L18.6351 10.6037H18.6247C18.1821 10.0303 17.9022 9.64497 17.7847 9.44733C17.5704 9.072 17.5218 8.69132 17.6395 8.30601C17.722 8.01383 18.033 7.39819 18.5723 6.45817Z"/>
                </g>
                </svg>         
            </div> 
            <div class="flex 2xl:flex-row flex-col w-[92%] items-center text-center text-lg 2xl:pt-[10vh] pt-[5vh] justify-between">
                <span class="2xl:py-0 py-[1vh]">
                    © Alpha Attire Co. Все права защищены️
                </span>
                <span class="2xl:pr-20 text-lg underline 2xl:py-0 py-[1vh]">
                    Политика конфиденциальности
                </span>
                <span class="text-lg 2xl:mr-10 2xl:py-0 py-[1vh]">
                    Разработано в  <a class="underline footer_text" href="">My House</a>
                </span>
            </div> 
        </div>
    </footer>

    <div id="menu" class="">

        <nav class="main-nav">

            <ul>

                <li>
                    <a href="index.php" class="logo_text links_burger" link="#000000" vlink="000000">
                        Alpha
                    </a>
                </li>

                <li>
                    <a href="catalog.php" class="links links_burger" link="#000000" vlink="000000">
                        Каталог
                    </a>
                </li>
                
                <li>
                    <a href="/cart.php" class="links links_burger" link="#000000" vlink="000000">
                        Корзина
                    </a>
                </li>

                <li>
                    <a href="/login-signup-form/registration.php" class="links links_burger" link="#000000" vlink="000000">
                        Регистрация
                    </a>
                </li>

                <li>
                    <a href="/login-signup-form/login.php" class="links links_burger" link="#000000" vlink="000000">
                        Вход
                    </a>
                </li>
               
                <li>
                    <a href="/profile.php" class="links links_burger" link="#000000" vlink="000000">
                        Профиль
                    </a>
                </li>

            </ul>

        </nav>

    </div>

    <script src="/libs/jquery/jquery-3.3.1.min.js"></script>
    <script src="js/dropDown.js"></script>
    <script src="/js/cart.js?no-cache"></script>
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.35/dist/lenis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="/js/lenis/lenis.js"></script>
    <script src="/js/burger.js"></script>
</body>
</html>