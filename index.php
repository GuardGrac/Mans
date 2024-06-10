<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha Attire</title>
    <link rel="stylesheet" href="/style/main.css">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="/js/swiper-bundle.min.css"/>
    <script src="./js/swiper-bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
                /** @type {import('tailwindcss').Config} */
    tailwind.config = {
        theme: {
            extend: {},
            screens: {
            'sm': {'min': '200px', 'max': '549px'},

            'md': {'min': '550px', 'max': '767px'},

            '2md': {'min': '768px', 'max': '1023px'},

            'lg': {'min': '1024px', 'max': '1279px'},

            'xl': {'min': '1280px', 'max': '1535px'},
            
            '2xl': {'min': '1536px'},
         
            },
        },
    }
    </script>
</head>
<body>
    
<nav class="w-screen bg-white/90 z-10 py-1 pt-[2vh] fixed 2xl:mx-auto xl:px-0 xl:mx-auto px-[8vw] 2xl:px-[4vw] nav_links">
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
                        +7 960 860 24-21
                    </p>
                    <button class="nav__toggle-menu z-40 2xl:pl-[9vw] xl:pl-[8vw] xl:pr-[3vw] pl-0">
                        <span></span>
                    </button>
                </div>
            </div>
    </nav>

    <div class="sm:block md:block 2md:block lg:block 2xl:hidden xl:hidden">
            <img class="absolute h-[100vh] w-screen z-[-1] object-cover object-top select-none" src="/images/back.png" alt="">
            <header class="ml-[8vw] flex flex-col pt-[35vh] bg-transparent h-[100vh] w-[100vh]">
                <span class="batch mt-[5.45%] sm:text-[38px] md:text-[56px] 2md:text-[72px] lg:text-[76px] text-wrap uppercase sm:leading-[5.5vh] md:leading-[7.5vh] 2md:leading-[9.5vh] lg:leading-[9.5vh] font-['FoglihtenNo06'] font-[10]">
                    Компания<br class="sm:block md:block 2md:block lg:hidden hidden"> мужских<br class="sm:block md:block 2md:block hidden">
                    футболок
                </span>
                <p class="batch mt-[2vh] italic text-balance sm:text-[21px] md:text-[26px] 2md:text-[28px] lg:text-[30px] tracking-[0.013em]">
                Превращаем ткань в<br class="block 2md:hidden"> одежду
                </p>     
                    <button class="batch flex flex-row justify-around items-center w-[150px] 2md:w-[200px] 2md:h-[55px] lg:w-[210px] lg:h-[65px] sm:text-[16px] md:text-[18px] 2md:text-[20px] lg:text-[22px] h-[45px] bg-[#F7B794] text-black rounded mt-[3vh]">
                    Подробнее
                    <svg class="m-2 -rotate-[90deg] sm:w-[20px] md:w-[20px] 2md:w-[25px] lg:w-[30px]" viewBox="0 0 16 30" fill="black" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 16L14.59 14.59L9 20.27V0H7V20.17L1.42 14.58L0 16L8 24L16 16Z" fill="black"/>
                        </svg>
                </button>     
            </header>
    </div>
    <div class="slider w-screen hidden 2xl:block xl:block h-[120vh] overflow-y-hidden">
        <div class="slide w-screen h-[120vh] overflow-y-hidden">
            <img class="absolute h-[120vh] w-screen z-[-1] object-cover object-top select-none overflow-y-hidden" src="/images/back.png" alt="">
            <header class="ml-[13vw] w-fit flex flex-col justify-center bg-transparent h-[120vh] overflow-y-hidden">
                <span class="batch mt-[5.45%] text-[85px] uppercase leading-[6rem] font-['FoglihtenNo06'] font-[10]">
                Компания мужских<br class="hidden 2xl:block">
                футболок 
                </span>
                <p class="batch mt-[55px] italic text-[34px] tracking-[0.013em]">
                Превращаем ткань в одежду
                </p>     
                    <button class="batch flex flex-row justify-around items-center w-[226px] h-[65px] bg-[#F7B794] text-2xl text-black rounded mt-[55px]">
                    Подробнее
                    <svg class="m-2 -rotate-[90deg]" width="16" height="24" viewBox="0 0 16 24" fill="black" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 16L14.59 14.59L9 20.27V0H7V20.17L1.42 14.58L0 16L8 24L16 16Z" fill="black"/>
                        </svg>
                </button>     
            </header>
        </div>
        <div class="slide w-screen h-[120vh] overflow-y-hidden">
            <img class="absolute h-[120vh] w-screen z-[-1] object-cover object-top select-none overflow-y-hidden" src="/images/back.png" alt="">
            <header class="ml-[13vw] w-fit flex flex-col justify-center bg-transparent h-[120vh] overflow-y-hidden">
                <span class="batch mt-[5.45%] text-[85px] uppercase leading-[6rem] font-['FoglihtenNo06'] font-[10]">
                Компания мужских<br class="hidden 2xl:block">
                футболок 
                </span>
                <p class="batch mt-[55px] italic text-[34px] tracking-[0.013em]">
                Превращаем ткань в одежду
                </p>     
                    <button class="batch flex flex-row justify-around items-center w-[226px] h-[65px] bg-[#F7B794] text-2xl text-black rounded mt-[55px]">
                    Подробнее
                    <svg class="m-2 -rotate-[90deg]" width="16" height="24" viewBox="0 0 16 24" fill="black" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 16L14.59 14.59L9 20.27V0H7V20.17L1.42 14.58L0 16L8 24L16 16Z" fill="black"/>
                        </svg>
                </button>     
            </header>
        </div>
        <button class="batch btn btn-next"> 
            <svg width="40" viewBox="0 0 30 40" fill="none" stroke="black" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.35913 14.6985H20.9825" stroke="black"/>
                <path d="M18.0311 11.5193L21.2099 14.6981L18.0311 17.8769" stroke="black"/>
                <g opacity="0.7">
                <circle cx="14.907" cy="15.0927" r="13.9072" stroke="black"/>
                </g>
            </svg>                               
        </button>
        <div class="batch w-[45px] absolute bottom-[40px] left-[49.45%] right-[0px] m-[0px] btn" id="scroll-button">
           <svg width="50" viewBox="0 0 35 50" fill="none" stroke="black" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.27147 16.7208C1.4857 19.2272 3.62235 21.3555 6.37636 21.6708C7.3891 21.7866 8.41876 21.868 9.4622 21.868C10.5056 21.868 11.5353 21.7866 12.548 21.6708C15.3021 21.3555 17.4386 19.2272 17.6529 16.7208C17.8014 14.984 17.9245 13.2026 17.9245 11.3874C17.9245 9.57218 17.8014 7.79075 17.6529 6.05397C17.4386 3.54749 15.3021 1.41917 12.548 1.10398C11.5353 0.988086 10.5056 0.906738 9.4622 0.906738C8.41876 0.906738 7.3891 0.988086 6.37636 1.10398C3.62235 1.41917 1.4857 3.54749 1.27147 6.05397C1.12302 7.79075 1 9.57218 1 11.3874C1 13.2026 1.12302 14.984 1.27147 16.7208Z" stroke="black"/>
                <g class="mouse-anim">
                    <path d="M9.46484 5.09473L9.46484 8.23892" stroke="#E0E0E0" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
            </svg>    
        </div> 
        <button class="batch btn btn-prev"> 
            <svg width="40" viewBox="0 0 30 40" fill="none" stroke="black" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.4548 15.4871L8.83144 15.4871" stroke="black"/>
                <path d="M11.7828 18.6663L8.60402 15.4875L11.7828 12.3087" stroke="black"/>
                <g opacity="0.7">
                <circle cx="14.907" cy="15.0928" r="13.9072" transform="rotate(-180 14.907 15.0928)" stroke="black"/>
                </g>
            </svg>                
        </button>
     </div>

     <section class="w-screen flex flex-wrap gap-[40px] text-center items-center justify-evenly 2xl:mt-[26vh] mt-[10vh] text-[25px]" id="section_case">
       <div class="flex flex-col flex-width">
            <p class="batch 2xl:text-[110px] text-8xl 2xl:h-[120px] font-['FoglihtenNo06'] font-[10]">
                100%
            </p>
            <p class="batch leading-8">
                Реализуемые<br>
                заказы
            </p>
       </div>
       <div class="batch flex flex-col flex-width">
            <p class="2xl:text-[110px] text-8xl 2xl:h-[120px] font-['FoglihtenNo06'] font-[10]">
                400+
            </p>
            <p class="batch leading-8">
                Заказов в<br>
                день
            </p>
       </div>
       <div class="batch flex flex-col flex-width">
            <p class="2xl:text-[110px] text-8xl 2xl:h-[120px] font-['FoglihtenNo06'] font-[10]">
                15
            </p>
            <p class="batch leading-8">
                Лет в сфере
            </p>
       </div>
       <div class="flex flex-col flex-width">
            <p class="batch 2xl:text-[110px] text-8xl 2xl:h-[120px] font-['FoglihtenNo06'] font-[10]">
                90%
            </p>
            <p class="batch leading-8">
                Заказчиков<br>
                возвращаются за<br>
                новой футболкой
            </p>
       </div>
    </section>

    <section class="flex w-screen z-1 justify-center items-center mt-[30vh] mx-auto">
        <div class="flex 2xl:flex-row xl:flex-row flex-col w-full relative justify-evenly 2xl:items-center xl:items-center">
            <span class="batch 2xl:text-[57px] xl:text-[54px] sm:text-[27px] md:text-[36px] 2md:text-[48px] lg:text-[56px] 2xl:pl-0 xl:pl-0 pl-[8vw] absolute uppercase font-['FoglihtenNo06'] 2xl:font-[1] font-[300] 2xl:leading-[86px] 2xl:-top-[120px] xl:-top-[120px] 2xl:left-36 xl:left-[50px] sm:-top-[11vh] md:-top-[14vh] 2md:-top-[19vh] lg:-top-[23vh] left-[0%]" style="user-select: none;">
                Компания Alpha это<br class="block 2xl:hidden xl:hidden">творческое <br class="hidden 2xl:block xl:block"> объединение
                <span class="text-[#F7B794] 2xl:-tracking-[0.03em] 2xl:pl-8 2xl:text-[80px] xl:text-[75px] sm:text-4xl md:text-5xl font-['FoglihtenNo06']">профессионалов</span>
            </span> 
                <img class="batch z-[-2] 2xl:h-[664px] 2xl:w-[765px] 2xl:ml-24 xl:h-[664px] xl:w-[765px] xl:ml-20 w-screen h-full object-cover aspect-square" src="/images/first_block.jpeg" alt="">
            <div class="flex flex-col 2xl:w-[740px] xl:w-[740px] xl:h-[700px] 2xl:h-[700px] w-[90vw] pt-[10%] xl:p-[3vw] pl-[8vw] 2xl:pl-[2vw] 2xl:pt-0 text-balance h-full justify-evenly 2xl:justify-center text-[21px]">
                <p class="batch leading-[2.45rem] font-[600] mb-4">
                Компания Alpha специализируется на производстве высококачественных мужских футболок, сочетающих стиль и комфорт.
                Наша продукция изготавливается из лучших материалов, обеспечивая долговечность и удобство.
                <br> 
                </p>
                <p class="batch leading-[2.4rem] font-[600] 2xl:mb-[12px]">
                Мы предлагаем разнообразные дизайны, от классических до современных, удовлетворяющие любые вкусы.
                Быстрая доставка, доступные цены и внимание к деталям делают нас надежным выбором для вашего гардероба.
                Выберите Alpha для стильной и удобной повседневной одежды.
                </p>
                <button class="batch flex flex-row justify-between items-center text-center w-[280px] h-[40px] bg-transparent 2xl:mt-[53px] xl:mt-[30px] sm:mt-[30px] md:mt-[30px] 2md:mt-[30px] lg:mt-[30px]">
                    Подробнее о компании
                    <svg class="m-2 -rotate-[90deg]" width="16" height="24" viewBox="0 0 16 24" fill="black" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 16L14.59 14.59L9 20.17V0H7V20.17L1.42 14.58L0 16L8 24L16 16Z" fill="black"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <section class="flex p-2 justify-evenly w-screen mt-[10vh] flex-wrap">

        <div class="batch block-about flex-width-adv sm:h-[370px]">

            <div class="frst-row">

                <img src="/icons/assortment.webp" alt="" class="icons-about-us xl:w-[80px] xl:h-[80px] lg:w-[80px] lg:h-[80px] sm:w-[65px] sm:h-[65px]">

                <p class="batch text-title-about xl:text-[30px] lg:text-[30px] sm:text-[25px]">
                    
                    Широкий ассортимент

                </p>

            </div>

             <p class="batch description-about-us xl:text-[19px] sm:text-[18px]">

                Сайт Alpha предоставляет большой выбор различных футболок, что позволяет покупателям выбирать из множества вариантов в соответствии с их вкусами
                
            </p>

            <button class="batch about-us-button xl:text-[32px] sm:text-[20px] sm:h-[60px]">

                Это про меня!

                <svg class="arrow xl:w-[60px] xl:h-[60px] sm:h-[50px] sm:w-[50px]" version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96px" height="96px"
                    viewBox="0 0 96 96" enable-background="new 0 0 96 96" xml:space="preserve">
                    <switch>
                        <g i:extraneous="self">
                            <path d="M44,12v62.344L22.828,53.172c-1.562-1.562-4.094-1.562-5.656,0c-1.562,1.562-1.562,4.095,0,5.657l28,28
                                c1.562,1.562,4.095,1.562,5.656,0l28-28C79.609,58.048,80,57.024,80,56c0-1.023-0.391-2.047-1.172-2.828
                                c-1.562-1.562-4.095-1.562-5.656,0L52,74.344V12c0-2.208-1.791-4-4-4S44,9.791,44,12z"/>
                        </g>
                    </switch>
                </svg>
                
            </button>
            
        </div>
        
        <div class="batch block-about flex-width-adv sm:h-[370px]">
            
            <div class="frst-row">

                <img src="/icons/like.webp" alt="" class="icons-about-us xl:w-[80px] xl:h-[80px] lg:w-[80px] lg:h-[80px] sm:w-[65px] sm:h-[65px]">

                <p class="batch text-title-about xl:text-[30px] lg:text-[30px] sm:text-[25px]">

                    Качество продукции

                </p>

            </div>

            <p class="batch description-about-us xl:text-[19px] sm:text-[18px]">

                Alpha может гарантировать высокое качество своих футболок, что может быть подтверждено отзывами клиентов и сертификатами качества
                
            </p>

            <button class="batch about-us-button xl:text-[32px] sm:text-[20px] sm:h-[60px]">

                Это про меня!

                <svg class="arrow xl:w-[60px] xl:h-[60px] sm:h-[50px] sm:w-[50px]" version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96px" height="96px"
                    viewBox="0 0 96 96" enable-background="new 0 0 96 96" xml:space="preserve">
                    <switch>
                        <g i:extraneous="self">
                            <path d="M44,12v62.344L22.828,53.172c-1.562-1.562-4.094-1.562-5.656,0c-1.562,1.562-1.562,4.095,0,5.657l28,28
                                c1.562,1.562,4.095,1.562,5.656,0l28-28C79.609,58.048,80,57.024,80,56c0-1.023-0.391-2.047-1.172-2.828
                                c-1.562-1.562-4.095-1.562-5.656,0L52,74.344V12c0-2.208-1.791-4-4-4S44,9.791,44,12z"/>
                        </g>
                    </switch>
                </svg>
                
            </button>
            
        </div>

        <div class="batch block-about flex-width-adv sm:h-[370px]">
            
            <div class="frst-row">

                <img src="/icons/monitor.webp" alt="" class="icons-about-us xl:w-[80px] xl:h-[80px] lg:w-[80px] lg:h-[80px] sm:w-[65px] sm:h-[65px]">
                    
                <p class="batch text-title-about xl:text-[30px] lg:text-[30px] sm:text-[25px]">

                    Удобство покупки

                </p>

            </div>

            <p class="batch description-about-us xl:text-[19px] sm:text-[18px]">

                Покупка футболок на сайте Alpha может быть выполнена в несколько кликов, что экономит время и усилия покупателей

            </p>

            <button class="batch about-us-button xl:text-[32px] sm:text-[20px] sm:h-[60px]">

                Это про меня!

                <svg class="arrow xl:w-[60px] xl:h-[60px] sm:h-[50px] sm:w-[50px]" version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96px" height="96px"
                    viewBox="0 0 96 96" enable-background="new 0 0 96 96" xml:space="preserve">
                    <switch>
                        <g i:extraneous="self">
                            <path d="M44,12v62.344L22.828,53.172c-1.562-1.562-4.094-1.562-5.656,0c-1.562,1.562-1.562,4.095,0,5.657l28,28
                                c1.562,1.562,4.095,1.562,5.656,0l28-28C79.609,58.048,80,57.024,80,56c0-1.023-0.391-2.047-1.172-2.828
                                c-1.562-1.562-4.095-1.562-5.656,0L52,74.344V12c0-2.208-1.791-4-4-4S44,9.791,44,12z"/>
                        </g>
                    </switch>
                </svg>
                
            </button>
            
        </div>

        <div class="batch block-about flex-width-adv sm:h-[370px]">
            
            <div class="frst-row">

                <img src="/icons/support.webp" alt="" class="icons-about-us xl:w-[80px] xl:h-[80px] lg:w-[80px] lg:h-[80px] sm:w-[65px] sm:h-[65px]">

                <p class="batch text-title-about xl:text-[30px] lg:text-[30px] sm:text-[25px]">

                    Поддержка 24/7

                </p>

            </div>

             <p class="batch description-about-us xl:text-[19px] sm:text-[18px]">

                    Интересующий тебя вопрос ты, сможешь задать в любое для тебя время

            </p>

            <button class="batch about-us-button xl:text-[32px] sm:text-[20px] sm:h-[60px]">

                Это про меня!

                <svg class="arrow xl:w-[60px] xl:h-[60px] sm:h-[50px] sm:w-[50px]" version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96px" height="96px"
                    viewBox="0 0 96 96" enable-background="new 0 0 96 96" xml:space="preserve">
                    <switch>
                        <g i:extraneous="self">
                            <path d="M44,12v62.344L22.828,53.172c-1.562-1.562-4.094-1.562-5.656,0c-1.562,1.562-1.562,4.095,0,5.657l28,28
                                c1.562,1.562,4.095,1.562,5.656,0l28-28C79.609,58.048,80,57.024,80,56c0-1.023-0.391-2.047-1.172-2.828
                                c-1.562-1.562-4.095-1.562-5.656,0L52,74.344V12c0-2.208-1.791-4-4-4S44,9.791,44,12z"/>
                        </g>
                    </switch>
                </svg>
                
            </button>
            
        </div>

        <div class="batch block-about flex-width-adv sm:h-[370px]">
            
            <div class="frst-row">

                <img src="/icons/top.webp" alt="" class="icons-about-us xl:w-[80px] xl:h-[80px] lg:w-[80px] lg:h-[80px] sm:w-[65px] sm:h-[65px]">

                <p class="batch text-title-about xl:text-[30px] lg:text-[30px] sm:text-[25px]">

                    Один из лучших

                </p>

            </div>

            <p class="batch description-about-us xl:text-[19px] sm:text-[18px]">

                Сайт Alpha является одним из самых лучших сайтов по продаже футболок по меркам нашей аналитики
                
            </p>

            <button class="batch about-us-button xl:text-[32px] sm:text-[20px] sm:h-[60px]">

                Это про меня!

                <svg class="arrow xl:w-[60px] xl:h-[60px] sm:h-[50px] sm:w-[50px]" version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96px" height="96px"
                    viewBox="0 0 96 96" enable-background="new 0 0 96 96" xml:space="preserve">
                    <switch>
                        <g i:extraneous="self">
                            <path d="M44,12v62.344L22.828,53.172c-1.562-1.562-4.094-1.562-5.656,0c-1.562,1.562-1.562,4.095,0,5.657l28,28
                                c1.562,1.562,4.095,1.562,5.656,0l28-28C79.609,58.048,80,57.024,80,56c0-1.023-0.391-2.047-1.172-2.828
                                c-1.562-1.562-4.095-1.562-5.656,0L52,74.344V12c0-2.208-1.791-4-4-4S44,9.791,44,12z"/>
                        </g>
                    </switch>
                </svg>
                
            </button>
            
        </div>

        <div class="batch block-about flex-width-adv sm:h-[370px]">
            
            <div class="frst-row">

                <img src="/icons/verified.webp" alt="" class="icons-about-us xl:w-[80px] xl:h-[80px] lg:w-[80px] lg:h-[80px] sm:w-[65px] sm:h-[65px]">

                <p class="batch text-title-about xl:text-[30px] lg:text-[30px] sm:text-[25px]">

                    Все данные защищенны

                </p>

            </div>

            <p class="batch description-about-us xl:text-[19px] sm:text-[18px]">

                Все ваши данные предоставленные нашему сайту полностью защищенны

            </p>

            <button class="batch about-us-button xl:text-[32px] sm:text-[20px] sm:h-[60px]">

                Это про меня!

                <svg class="arrow xl:w-[60px] xl:h-[60px] sm:h-[50px] sm:w-[50px]" version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="96px" height="96px"
                    viewBox="0 0 96 96" enable-background="new 0 0 96 96" xml:space="preserve">
                    <switch>
                        <g i:extraneous="self">
                            <path d="M44,12v62.344L22.828,53.172c-1.562-1.562-4.094-1.562-5.656,0c-1.562,1.562-1.562,4.095,0,5.657l28,28
                                c1.562,1.562,4.095,1.562,5.656,0l28-28C79.609,58.048,80,57.024,80,56c0-1.023-0.391-2.047-1.172-2.828
                                c-1.562-1.562-4.095-1.562-5.656,0L52,74.344V12c0-2.208-1.791-4-4-4S44,9.791,44,12z"/>
                        </g>
                    </switch>
                </svg>
                
            </button>
            
        </div>
                    
    </div>

    </section>

    <section class="flex flex-col w-screen z-1 font-['FoglihtenNo06'] justify-center items-center mx-auto mt-[10vh]">
        <span class="font-['FoglihtenNo06'] batch flex flex-col w-screen 2xl:text-[64px] xl:text-[54px] lg:text-[56px] sm:text-[36px] md:text-[42px] 2md:text-[48px] xl:pl-[10vw] 2xl:pl-52 pl-[8vw] uppercase 2xl:leading-[5.3rem] xl:leading-[5rem] lg:leading-[4.6rem] 2md:leading-[4rem] leading-[3.3rem] text-start  font-[100]">
            Нашему опыту и профессионализму
            <span class="font-['FoglihtenNo06'] batch text-[#F7B794] text-start">
                доверяют:  
            </span>
        </span>
        <div class="flex flex-wrap w-screen h-fit items-center justify-center pt-[7%] sm:pt-0">
            <div class="flex flex-col flex-width-icons h-[400px] items-center justify-center border-b 2xl:border-b-0 xl:border-b-0"> 
                <div class="w-full h-[300px] flex p-[10px] border-e sm:border-e-0 items-center justify-center border-b">
                    <img class="batch w-[150px]" src="/icons/1-5-icon.png" alt="">
                </div>          
                <div class="w-full h-[300px] flex p-[10px] border-e sm:border-e-0 items-center justify-center">
                    <img class="batch w-[150px]" src="/icons/7-11-icon.png" alt="">
                </div>  
            </div>
            <div class="flex flex-col flex-width-icons h-[400px] items-center justify-center border-b 2xl:border-b-0 xl:border-b-0"> 
                <div class="w-full h-[300px] flex p-[10px] border-e sm:border-e-0 md:border-e-0 2md:border-e-0 items-center justify-center border-b">
                    <img class="batch w-[150px]" src="/icons/2-6-icon.png" alt="">
                </div>          
                <div class="w-full h-[300px] flex p-[10px] border-e sm:border-e-0 md:border-e-0 2md:border-e-0 items-center justify-center">
                    <img class="batch w-[150px]" src="/icons/8-12-icon.png" alt="">
                </div>  
            </div>
            <div class="flex flex-col flex-width-icons h-[400px] items-center justify-center border-b 2xl:border-b-0 xl:border-b-0"> 
                <div class="w-full h-[300px] flex p-[10px] border-e sm:border-e-0 items-center justify-center border-b">
                    <img class="batch w-[150px]" src="/icons/3-icon.png" alt="">
                </div>          
                <div class="w-full h-[300px] flex p-[10px] border-e sm:border-e-0 items-center justify-center">
                    <img class="batch w-[150px]" src="/icons/9-icon.png" alt="">
                </div>  
            </div>
            <div class="flex flex-col flex-width-icons h-[400px] items-center justify-center sm:border-b md:border-b 2md:border-b border-b-0"> 
                <div class="w-full h-[300px] flex p-[10px] border-e sm:border-e-0 md:border-e-0 2md:border-e-0 items-center justify-center border-b">
                    <img class="batch w-[150px] h-[175px]" src="/icons/4-icon.png" alt="">
                </div>          
                <div class="w-full h-[300px] flex p-[10px] border-e sm:border-e-0 md:border-e-0 2md:border-e-0 items-center justify-center">
                    <img class="batch w-[150px]" src="/icons/10-icon.png" alt="">
                </div>  
            </div>
            <div class="flex flex-col flex-width-icons h-[400px] items-center justify-center sm:border-b border-b-0"> 
                <div class="w-full h-[300px] flex p-[10px] border-e sm:border-e-0 items-center justify-center border-b">
                    <img class="batch w-[150px]" src="/icons/1-5-icon.png" alt="">
                </div>          
                <div class="w-full h-[300px] flex p-[10px] border-e sm:border-e-0 items-center justify-center">
                    <img class="batch w-[150px]" src="/icons/7-11-icon.png" alt="">
                </div>  
            </div>
            <div class="flex flex-col flex-width-icons h-[400px] items-center justify-center"> 
                <div class="w-full h-[300px] flex p-[10px] items-center justify-center border-b">
                    <img class="batch w-[150px]" src="/icons/2-6-icon.png" alt="">
                </div>          
                <div class="w-full h-[300px] flex p-[10px] items-center justify-center">
                    <img class="batch w-[150px]" src="/icons/8-12-icon.png" alt="">
                </div>  
            </div>
        </div>
    </section>

    <section class="flex flex-col justify-center items-center mt-[10vh] w-screen">
        <div class="batch contacts_box">
            <div class="bg-img xl:before:h-[513px] xl:before:w-[210px] xl:before:right-[500px] xl:before:top-[300px] 
            lg:before:h-[413px] lg:before:w-[110px] lg:before:right-[400px] lg:before:top-[360px]
            2md:hidden md:hidden sm:hidden ">
            </div>
            <div class="contacts_box">
                <p class="batch font-['FoglihtenNo06']">Контакты</p>
                <img class="batch w-[650px] h-[650px] xl:h-[550px] xl:w-[550px]
                 lg:h-[450px] lg:w-[450px]
                2md:hidden md:hidden sm:hidden bg-orange" src="/images/shirt-back.jpg" alt="">
            </div>
        </div>
            <div class="batch bg-img2 xl:h-[513px] xl:w-[640px] xl:left-[310px] xl:bottom-[610px]
             lg:h-[413px] lg:w-[540px] lg:left-[260px] lg:bottom-[560px]">
                <div class="contact_flex">
                    <img class="batch" src="/icons/call-contact.png" alt="">
                    <p class="batch text_contact">+7(960)-860-24-21</p>
                </div>
                <div class="contact_flex">
                    <img class="batch" src="/icons/emai-contact.png" alt="">
                    <p class="batch text_contact">danila.nazarov.2004@mail.ru</p>
                </div>
                <div class="contact_flex">
                    <img class="batch" src="/icons/geo-contact.png" alt="">
                    <p class="batch text_contact">Обл.Астраханская, Г.Астрахань, Ул.Боевая 2</p>
                </div>
                <div class="contact_flex">
                    <img class="batch" src="/icons/telegram-contact.png" alt="">
                    <p class="batch text_contact">https://t.me/DAN_ABOBA</p>
                </div>
                <div class="contact_flex">
                    <img class="batch" src="/icons/vk-contact.png" alt="">
                    <p class="batch text_contact">https://vk.com/guardian_4dx</p>
                </div>
                <div class="contact_button-align">
                   <button class="batch contact_button">
                    Напишите нам
                </button>  
                </div>    
                    
            </div>
    </section>

    <section class="flex w-screen justify-center items-center spacing-between-sec">
        <div class="flex flex-col w-screen items-start 2xl:mx-20 mx-auto">
            <div class="2xl:pl-[8vw] xl:pl-[10vw] pl-[8vw] 2xl:text-[63px] xl:text-[58px] lg:text-[56px] sm:text-[36px] md:text-[42px] 2md:text-[48px] uppercase">
                <p class="batch font-['FoglihtenNo06']">Что говорят наши<br class="hidden 2md:block"> клиенты о 
                    <span class="font-['FoglihtenNo06'] batch pb-5 text-[#F7B794]">
                        нас
                    </span>
                </p>
                <p class="batch 2xl:text-[27px] xl:text-[27px] text-[21px] normal-case text-balance 2xl:text-nowrap opacity-60 leading-[4vh] font-[400] pb-5">
                    Мы ценим отзывы наших клиентов, ведь они являются лучшим<br class="hidden 2xl:block">
                    свидетельством нашего мастерства и профессионализма.
                </p>
            </div>
            <div class="mySwiper swiper 2xl:w-[100vw] w-[90vw] items-center justify-center flex flex-col">
                <div class="swiper-wrapper flex flex-row w-[100%] items-center">
                        <div class="flex swiper-slide flex-col h-[50vh] w-[40vw] bg-white/5">
                            <blockquote class="batch 2xl:pl-[3vw] p-[10%] pt-[4vh]">
                                <p class="batch text-[96px] uppercase h-[90px]">“</p>
                                <p class="batch pt-5 pb-2 text-[21px] font-[600]">Alpha - мой выбор номер один! У них самые стильные футболки, и качество просто выше всяких похвал. Очень рекомендую!</p>
                                <footer class="batch text-[#F7B794] text-lg"><br>Климова Ольга</footer>
                            </blockquote>
                        </div>
                        <div class="flex swiper-slide flex-col h-[50vh] w-[40vw] bg-white/5">
                            <blockquote class="batch 2xl:pl-[3vw] p-[10%] pt-[4vh]">
                                <p class="batch text-[96px] uppercase h-[90px]">“</p>
                                <p class="batch pt-5 pb-2 text-[21px] font-[600]">Футболки от Alpha - это не просто одежда, это часть стиля. Удобные, красивые, идеально сидят. Буду заказывать ещё!</p>
                                <footer class="batch text-[#F7B794] text-lg"><br>Климов Дмитрий</footer>
                            </blockquote>
                        </div>
                        <div class="flex swiper-slide flex-col h-[50vh] w-[40vw] bg-white/5">
                            <blockquote class="batch 2xl:pl-[3vw] p-[10%] pt-[4vh]">
                                <p class="batch text-[96px] uppercase h-[90px]">“</p>
                                <p class="batch pt-5 pb-2 text-[21px] font-[600]">Спасибо Alpha за отличные футболки! Качество материалов на высоте, цены приемлемые. Это мой новый любимый магазин для покупки повседневной одежды.</p>
                                <footer class="batch text-[#F7B794] text-lg"><br>Егоров Михаил</footer>
                            </blockquote>
                        </div>
                        <div class="flex swiper-slide flex-col h-[50vh] bg-white/5">
                            <blockquote class="batch 2xl:pl-[3vw] p-[10%] pt-[4vh]">
                                <p class="batch text-[96px] uppercase h-[90px]">“</p>
                                <p class="batch pt-5 pb-2 text-[21px] font-[600]">Очень доволен футболкой от Alpha. Материалы качественные, модель стильная и сидит идеально. Доставка быстрая.</p>
                                <footer class="batch text-[#F7B794] text-lg"><br>Александр Иванов</footer>
                            </blockquote>
                        </div>
                        <div class="flex swiper-slide  flex-col  h-[50vh] bg-white/5">
                            <blockquote class="batch 2xl:pl-[3vw] p-[10%] pt-[4vh]">
                                <p class="batch text-[96px] uppercase h-[90px]">“</p>
                                <p class="batch pt-5 pb-2 text-[21px] font-[600]">Их футболки не только стильные, но и прочные. Отличное сочетание качества и цены. Рекомендую всем!</p>
                                <footer class="batch text-[#F7B794] text-lg"><br>Екатерина Николаева</footer>
                            </blockquote>
                        </div>
                        <div class="flex swiper-slide  flex-col  h-[50vh] bg-white/5">
                            <blockquote class="batch 2xl:pl-[3vw] p-[10%] pt-[4vh]">
                                <p class="batch text-[96px] uppercase h-[90px]">“</p>
                                <p class="batch pt-5 pb-2 text-[21px] font-[600]">Футболки Alpha - это настоящее качество. У меня уже несколько штук, и все отлично держат форму после множества стирок.</p>
                                <footer class="batch text-[#F7B794] text-lg"><br>Артем Семенов</footer>
                            </blockquote>
                        </div>
                </div>
                <div class="flex w-[95vw] justify-between sm:hidden md:hidden">
                    <div class="batch swiper-button-prev btn-swip">
                        <svg viewBox="0 0 30 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.4548 15.4871L8.83144 15.4871" stroke="black"/>
                            <path d="M11.7828 18.6663L8.60402 15.4875L11.7828 12.3087" stroke="black"/>
                            <g opacity="0.7">
                            <circle cx="14.907" cy="15.0928" r="13.9072" transform="rotate(-180 14.907 15.0928)" stroke="black" />
                            </g>
                        </svg>  
                    </div>
                    <div class="batch swiper-button-next btn-swip">
                        <svg viewBox="0 0 30 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.35913 14.6985H20.9825" stroke="black"/>
                            <path d="M18.0311 11.5193L21.2099 14.6981L18.0311 17.8769" stroke="black"/>
                            <g opacity="0.7">
                            <circle cx="14.907" cy="15.0927" r="13.9072" stroke="black"/>
                            </g>
                        </svg> 
                    </div>  
                </div>
        </div>
    </section>

    <footer class="flex w-screen justify-center spacing-between-sec items-center mx-auto">
        <div class="flex flex-col w-screen items-center leading-[2rem] font-['Mulish']">
            <span class="footerbox mx-5 2xl:text-[86px] text-5xl text-center relative line1 italiana py-5">
            ALPHA
            </span>
            <p class="footerbatch text-[22px] text-center">
                Превращаем ткань в одежду
            </p>
            <div class="flex flex-row justify-evenly items-center w-[100px] 2xl:pt-[10vh] pt-[5vh]">
                <svg class="footerbatch" viewBox="0 0 35 18" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.8" d="M3.60924 10.4295L5.47485 16.797L7.90363 13.4809L12.0679 18L15 0L0 8.53063L3.60924 10.4295ZM10.7137 5.16438L6.12247 10.882L5.55061 13.8247L4.49421 10.2181L10.7137 5.16438Z"/>
                </svg>
                <svg class="footerbatch" viewBox="0 0 35 18" fill="black" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.8">
                <path d="M18.5723 6.45817C18.8555 5.96047 19.0804 5.56112 19.2465 5.25984C20.4426 3.09845 20.9611 1.71774 20.8022 1.11578L20.7399 0.974796C20.6984 0.890116 20.591 0.812353 20.4183 0.741965C20.2454 0.671627 20.0242 0.660388 19.7547 0.706822L16.7677 0.735456C16.6986 0.726098 16.6294 0.728284 16.5602 0.741965C16.4911 0.756256 16.4462 0.770598 16.4253 0.784279C16.4045 0.798621 16.3873 0.810116 16.3736 0.819474L16.3322 0.861788C16.2976 0.889811 16.2596 0.939297 16.2181 1.00999C16.1766 1.08063 16.1418 1.16251 16.1144 1.25681C15.7894 2.3938 15.4196 3.45115 15.0047 4.4285C14.7488 5.01119 14.5136 5.51667 14.2995 5.94368C14.0851 6.37166 13.9054 6.68637 13.7601 6.88803C13.615 7.09004 13.4835 7.25248 13.3661 7.37423C13.2484 7.49685 13.1586 7.54822 13.0965 7.52956C13.0342 7.51089 12.9754 7.49223 12.9202 7.4729C12.8233 7.38858 12.7454 7.27369 12.6868 7.12772C12.628 6.98242 12.5884 6.79902 12.5675 6.57804C12.5469 6.35737 12.5345 6.1669 12.5313 6.0069C12.5276 5.84725 12.5295 5.6219 12.5366 5.33023C12.5435 5.03886 12.5469 4.84188 12.5469 4.73823C12.5469 4.38151 12.5522 3.99371 12.5625 3.5754C12.5728 3.15739 12.5815 2.8259 12.5884 2.58152C12.5953 2.3375 12.5987 2.07883 12.5987 1.80618C12.5987 1.53414 12.5865 1.31997 12.5622 1.1647C12.5379 1.00999 12.5015 0.859652 12.4534 0.713688C12.4049 0.568334 12.3341 0.455326 12.2407 0.375681C12.1473 0.295681 12.0316 0.232514 11.8933 0.185165C11.5266 0.0721571 11.0599 0.0117877 10.4931 0.00187024C9.20701 -0.0161846 8.38074 0.0964675 8.01432 0.340487C7.86913 0.444137 7.73768 0.584812 7.62022 0.763478C7.49565 0.970473 7.47847 1.08343 7.56846 1.10148C7.98341 1.18616 8.27705 1.38848 8.44993 1.70782L8.51223 1.87682C8.56054 1.99944 8.60889 2.21549 8.65742 2.52548C8.70577 2.83551 8.7369 3.1785 8.75086 3.5545C8.78543 4.24048 8.78543 4.82754 8.75086 5.31655C8.71628 5.8055 8.68354 6.18587 8.65241 6.45791C8.62124 6.73057 8.57454 6.95124 8.51246 7.12025C8.45015 7.28986 8.40873 7.3932 8.38789 7.43084C8.36704 7.46817 8.34987 7.49182 8.33613 7.50123C8.24614 7.54792 8.15293 7.57157 8.05608 7.57157C7.9592 7.57157 7.8417 7.50555 7.7034 7.37388C7.56506 7.24287 7.42148 7.06171 7.27307 6.83137C7.12422 6.60139 6.9568 6.27925 6.76992 5.86556C6.58327 5.45254 6.38951 4.96354 6.18913 4.39987L6.02332 3.99086C5.91959 3.72818 5.77781 3.34501 5.59805 2.84232C5.41828 2.33964 5.2591 1.85348 5.12102 1.38319C5.0656 1.18616 4.98268 1.03583 4.8721 0.932176L4.82035 0.889862C4.78577 0.852481 4.73035 0.812354 4.65432 0.770294C4.57805 0.727979 4.49884 0.697464 4.41569 0.678493L1.57391 0.706517C1.28353 0.706517 1.08659 0.79618 0.982863 0.974796L0.941402 1.05917C0.920447 1.10647 0.910156 1.18179 0.910156 1.28483C0.910156 1.38848 0.930999 1.51517 0.97246 1.6652C1.38741 2.99053 1.83858 4.26855 2.3259 5.49923C2.81348 6.73057 3.23693 7.72221 3.59646 8.4739C3.95599 9.2262 4.3224 9.93522 4.69593 10.6025C5.06945 11.2699 5.31654 11.6972 5.43744 11.8849C5.55834 12.0732 5.65339 12.2142 5.72258 12.3079L5.98182 12.6465C6.14763 12.8719 6.39153 13.142 6.71308 13.457C7.0346 13.772 7.3905 14.082 7.78142 14.3871C8.1719 14.6927 8.6267 14.9414 9.14515 15.1344C9.66364 15.3274 10.1684 15.4048 10.6593 15.3669H11.8521C12.0941 15.3388 12.2773 15.2359 12.4017 15.0568L12.4431 14.9865C12.4706 14.9305 12.4967 14.8433 12.521 14.7259C12.545 14.6086 12.5574 14.4791 12.5574 14.3385C12.5503 13.9345 12.573 13.5697 12.6248 13.246C12.6765 12.9216 12.7353 12.6776 12.8011 12.5127C12.8668 12.3486 12.941 12.2098 13.0241 12.0968C13.1071 11.9838 13.1657 11.9163 13.2005 11.8926C13.235 11.8696 13.2628 11.8531 13.2834 11.8431C13.4492 11.7681 13.6445 11.8409 13.8694 12.0616C14.0941 12.283 14.305 12.5549 14.5022 12.8793C14.6991 13.2036 14.9359 13.5674 15.2126 13.9718C15.489 14.3757 15.731 14.6764 15.9385 14.8737L16.146 15.0434C16.2843 15.1558 16.4638 15.2591 16.6853 15.3534C16.9065 15.4471 17.1003 15.4708 17.2661 15.4238L19.9212 15.3671C20.1839 15.3671 20.3879 15.3086 20.5331 15.1909C20.6783 15.0742 20.7647 14.9441 20.7924 14.8035C20.8199 14.6625 20.8217 14.5034 20.7977 14.3244C20.7734 14.1461 20.7491 14.0216 20.7251 13.9512C20.7009 13.8809 20.6783 13.8217 20.6575 13.775C20.3117 12.9294 19.6515 11.8907 18.6766 10.6597L18.6557 10.6317L18.6454 10.6174L18.6351 10.6037H18.6247C18.1821 10.0303 17.9022 9.64497 17.7847 9.44733C17.5704 9.072 17.5218 8.69132 17.6395 8.30601C17.722 8.01383 18.033 7.39819 18.5723 6.45817Z"/>
                </g>
                </svg>         
            </div> 
            <div class="flex 2xl:flex-row flex-col w-[92%] items-center text-center text-lg 2xl:pt-[10vh] pt-[5vh] justify-between">
                <span class="footerbatch 2xl:py-0 py-[1vh]">
                    © Alpha Attire Co. Все права защищены️
                </span>
                <span class="footerbatch 2xl:pr-20 text-lg underline 2xl:py-0 py-[1vh]">
                    Политика конфиденциальности
                </span>
                <span class="footerbatch text-lg 2xl:mr-10 2xl:py-0 py-[1vh]">
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
                        <a href="/cart.html" class="links links_burger" link="#000000" vlink="000000">
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
    <script src="js/dropDown.js"></script>
    <script src="./js/sliderReviews.js"></script>
    <script src="js/swiper.js"></script>
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.35/dist/lenis.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
     <script src="js/burger.js"></script>
    <script src="js/gsap/anim.js"></script>
    <script src="js/gsap/batch-anim.js"></script>
</body>
</html>