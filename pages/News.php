<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/f776702b05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="sign flex flex-row h-[30px] fixed top-0 left-0 right-0 z-50 items-center md:px-[20px] px-[10px] justify-between bg-[#f2f2f2] text-sm">
        <p class="block">Free shipping on orders above $200 (US only)</p>
        <p class="hidden md:ml-auto md:mr-[56px] mr-[10px]"><a href="./pages/Account.php">User1234</a></p>
        <p class="cursor-pointer hidden"><a href="#">Log out</a></p>
        <p class="cursor-pointer"><a href="./pages/Login.php">Log in</a></p>
    </div>
    <div class="header flex justify-between lg:px-[60px] px-[34px] bg-[#f2f2f2] fixed top-[30px] left-0 right-0 z-50">
        <div class="header__logo order-2 lg:order-1">
            <img src="../images/logo.svg" alt="">
        </div>
        <div class="header__navbar flex items-center order-1 lg:order-2 lg:mr-auto lg:ml-[62px]">
            <i class="header__navbar-icon lg:hidden fa-solid fa-bars text-3xl"></i>
            <div class="header__navbar-container custom-hidden flex flex-col absolute top-[65px] left-0 right-0 items-start lg:static lg:flex-row lg:items-center bg-white lg:bg-[#f2f2f2]">
                <div class="lg:hidden header__search-container header__navbar-item w-full md:px-[25px] px-[18px] py-[10px] relative">
                    <form action="">
                        <input type="text" id="search-info" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 pl-2.5 pr-12" placeholder="Search..." required>
                        <div class="header__search text-2xl px-4 absolute bottom-1/2 translate-y-1/2 right-[2%]">
                            <button type="submit" class="px-2 py-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>

                <div class="header__navbar-item w-full"><a href="../index.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Home</a>
                </div>
                <div class="header__navbar-item w-full"><a href="./Product.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Products</a>
                </div>
                <div class="header__navbar-item w-full"><a href="#" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">News</a>
                </div>
                <div class="header__navbar-item w-full"><a href="./About.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">About</a>
                </div>
            </div>
        </div>
        <div class="header__lg-search hidden lg:block text-2xl px-4 py-[10px] cursor-pointer order-3 relative min-w-[25%]">
            <i class="fa-solid fa-magnifying-glass absolute bottom-1/2 translate-y-1/2 right-[10%]"></i>
            <div class="header__lg-search">
                <form action="">
                    <input type="text" id="search-info" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 pl-2.5 pr-12" placeholder="Search..." required>
                </form>
            </div>
        </div>
        <div class="header__icon flex items-center order-4">
            <div class="header__cart text-2xl px-4 py-[16.5px] cursor-pointer">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div class="header__user text-2xl px-4 py-[16.5px] cursor-pointer">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
    </div>
    <div class="news-detail-container mt-[95px] mb-[50px] lg:mx-[100px] md:mx-[50px] mx-[25px]">
        <strong class="md:text-[25px] text-[20px]">Lastest news</strong><br><br>
        <div class="md:px-[75px] px-[50px] pt-[20px] pb-[10px]">
            <div class="flex flex-col lg:flex-row lg:gap-[122.5px] mb-[25px]">
                <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                    <div class="mb-2">
                        <img src="../../images/news1.png" alt="">
                    </div>
                    <p class="text-base font-semibold">Wales Bonner's adidas Originals Fall/Winter 2023 Collection
                        Debuts On November 8th</p>
                </div>
                <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                    <div class="mb-2">
                        <img src="../../images/news1.png" alt="">
                    </div>
                    <p class="text-base font-semibold">Wales Bonner's adidas Originals Fall/Winter 2023 Collection
                        Debuts On November 8th</p>
                </div>
                <div class="w-full lg:w-1/3">
                    <div class="mb-2">
                        <img src="../../images/news1.png" alt="">
                    </div>
                    <p class="text-base font-semibold">Wales Bonner's adidas Originals Fall/Winter 2023 Collection
                        Debuts On November 8th</p>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row lg:gap-[122.5px] mb-[25px]">
                <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                    <div class="mb-2">
                        <img src="../../images/news1.png" alt="">
                    </div>
                    <p class="text-base font-semibold">Wales Bonner's adidas Originals Fall/Winter 2023 Collection
                        Debuts On November 8th</p>
                </div>
                <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                    <div class="mb-2">
                        <img src="../../images/news1.png" alt="">
                    </div>
                    <p class="text-base font-semibold">Wales Bonner's adidas Originals Fall/Winter 2023 Collection
                        Debuts On November 8th</p>
                </div>
                <div class="w-full lg:w-1/3">
                    <div class="mb-2">
                        <img src="../../images/news1.png" alt="">
                    </div>
                    <p class="text-base font-semibold">Wales Bonner's adidas Originals Fall/Winter 2023 Collection
                        Debuts On November 8th</p>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row lg:gap-[122.5px] mb-[25px]">
                <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                    <div class="mb-2">
                        <img src="../../images/news1.png" alt="">
                    </div>
                    <p class="text-base font-semibold">Wales Bonner's adidas Originals Fall/Winter 2023 Collection
                        Debuts On November 8th</p>
                </div>
                <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                    <div class="mb-2">
                        <img src="../../images/news1.png" alt="">
                    </div>
                    <p class="text-base font-semibold">Wales Bonner's adidas Originals Fall/Winter 2023 Collection
                        Debuts On November 8th</p>
                </div>
                <div class="w-full lg:w-1/3">
                    <div class="mb-2">
                        <img src="../../images/news1.png" alt="">
                    </div>
                    <p class="text-base font-semibold">Wales Bonner's adidas Originals Fall/Winter 2023 Collection
                        Debuts On November 8th</p>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row lg:gap-[122.5px] mb-[25px]">
                <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                    <div class="mb-2">
                        <img src="../../images/news1.png" alt="">
                    </div>
                    <p class="text-base font-semibold">Wales Bonner's adidas Originals Fall/Winter 2023 Collection
                        Debuts On November 8th</p>
                </div>
                <div class="w-full lg:w-1/3 lg:mb-0 mb-[25px]">
                    <div class="mb-2">
                        <img src="../../images/news1.png" alt="">
                    </div>
                    <p class="text-base font-semibold">Wales Bonner's adidas Originals Fall/Winter 2023 Collection
                        Debuts On November 8th</p>
                </div>
                <div class="w-full lg:w-1/3">
                    <div class="mb-2">
                        <img src="../../images/news1.png" alt="">
                    </div>
                    <p class="text-base font-semibold">Wales Bonner's adidas Originals Fall/Winter 2023 Collection
                        Debuts On November 8th</p>
                </div>
            </div>
        </div>
        <form action="" class="mb-[10px]">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                More news
            </button>
        </form>
    </div>
    <script src="../script/header.js"></script>
</body>

</html>