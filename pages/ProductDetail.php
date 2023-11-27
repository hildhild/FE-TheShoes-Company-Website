<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/f776702b05.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div id="main">
        <div class="header flex justify-between lg:px-[60px] px-[34px] bg-[#f2f2f2] fixed top-0 left-0 right-0 z-50">
            <div class="header__logo order-2 lg:order-1">
                <img src="../images/logo.svg" alt="">
            </div>
            <div class="header__navbar flex items-center order-1 lg:order-2 lg:mr-auto lg:ml-[62px]">
                <i class="header__navbar-icon lg:hidden fa-solid fa-bars text-3xl"></i>
                <div
                    class="header__navbar-container custom-hidden flex flex-col absolute top-[65px] left-0 right-0 items-start lg:static lg:flex-row lg:items-center bg-white lg:bg-[#f2f2f2]">
                    <div
                        class="lg:hidden header__search-container header__navbar-item w-full md:px-[25px] px-[18px] py-[10px] relative">
                        <form action="">
                            <input type="text" id="search-info"
                                class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 pl-2.5 pr-12"
                                placeholder="Search..." required>
                            <div class="header__search text-2xl px-4 absolute bottom-1/2 translate-y-1/2 right-[2%]">
                                <button type="submit" class="px-2 py-1"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="header__navbar-item w-full"><a href="../index.php"
                            class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Home</a>
                    </div>
                    <div class="header__navbar-item w-full"><a href="#"
                            class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Products</a>
                    </div>
                    <div class="header__navbar-item w-full"><a href="./News.php"
                            class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">News</a>
                    </div>
                    <div class="header__navbar-item w-full"><a href="./About.php"
                            class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">About</a>
                    </div>
                </div>
            </div>
            <div
                class="header__lg-search hidden lg:block text-2xl px-4 py-[10px] cursor-pointer order-3 relative min-w-[25%]">
                <i class="fa-solid fa-magnifying-glass absolute bottom-1/2 translate-y-1/2 right-[10%]"></i>
                <div class="header__lg-search">
                    <form action="">
                        <input type="text" id="search-info"
                            class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 pl-2.5 pr-12"
                            placeholder="Search..." required>
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
        <div class="lg:px-[100px] px-[20px] py-[50px] mt-[95px]">
            <div class="flex flex-row flex-start items-center gap-[10px]">
                <i class="fa-solid fa-chevron-left cursor-pointer block"></i>
                <p class="text-base underline underline-offset-4"><a href="./Product.php">Back to product</a></p>
            </div>
            <div class="flex flex-col">
                <div class="product__img bg-white w-full flex justify-center self-center">
                    <img src="../images/puma.png" alt="" class="block w-1/2">
                </div>
                <div class="product__img bg-white w-full flex justify-center self-center my-hidden">
                    <img src="../images/puma.png" alt="" class="block w-1/2">
                </div>
                <div class="product__img bg-white w-full flex justify-center self-center my-hidden">
                    <img src="../images/puma.png" alt="" class="block w-1/2">
                </div>
                <div class="product__img bg-white w-full flex justify-center self-center my-hidden">
                    <img src="../images/puma.png" alt="" class="block w-1/2">
                </div>
                <div class="w-full items-center justify-center text-center py-2 product__slider-change mt-[22px]">
                    <div class="inline-block mr-[70px]"><i
                            class="fa-solid fa-chevron-left product__slider-prev cursor-pointer"></i>
                    </div>
                    <div
                        class="inline-block w-[15px] h-[15px] border border-black px-[5px] mx-[5px] product__slider-btn cursor-pointer active">
                    </div>
                    <div
                        class="inline-block w-[15px] h-[15px] border border-black px-[5px] mx-[5px] product__slider-btn cursor-pointer">
                    </div>
                    <div
                        class="inline-block w-[15px] h-[15px] border border-black px-[5px] mx-[5px] product__slider-btn cursor-pointer">
                    </div>
                    <div
                        class="inline-block w-[15px] h-[15px] border border-black px-[5px] mx-[5px] product__slider-btn cursor-pointer">
                    </div>
                    <div class="inline-block ml-[70px]"><i
                            class="fa-solid fa-chevron-right product__slider-next cursor-pointer"></i></div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between self-center mt-[20px]">
                <div class="flex flex-col gap-[10px]">
                    <p class="text-2xl font-semibold">Puma Men's Caven Sneaker</p>
                    <p class="text-2xl font-semibold">$79.99</p>
                    <p class="text-base"><span class="font-semibold">Colour </span>PUMA WHITE/PUMA BLACK</p>
                    <p class="text-base font-semibold">Size</p>
                    <div class="flex flex-row flex-wrap text-base gap-[10px]">
                        <div
                            class="h-[32px] w-[48px] bg-[#d9d9d9] flex justify-center items-center cursor-pointer hover:bg-[#a9a9a9]">
                            7</div>
                        <div
                            class="h-[32px] w-[48px] bg-[#d9d9d9] flex justify-center items-center cursor-pointer hover:bg-[#a9a9a9]">
                            7.5</div>
                        <div
                            class="h-[32px] w-[48px] bg-[#d9d9d9] flex justify-center items-center cursor-pointer hover:bg-[#a9a9a9]">
                            8</div>
                        <div
                            class="h-[32px] w-[48px] bg-[#d9d9d9] flex justify-center items-center cursor-pointer hover:bg-[#a9a9a9]">
                            8.5</div>
                        <div
                            class="h-[32px] w-[48px] bg-[#d9d9d9] flex justify-center items-center cursor-pointer hover:bg-[#a9a9a9]">
                            9</div>
                        <div
                            class="h-[32px] w-[48px] bg-[#d9d9d9] flex justify-center items-center cursor-pointer hover:bg-[#a9a9a9]">
                            9.5</div>
                        <div
                            class="h-[32px] w-[48px] bg-[#d9d9d9] flex justify-center items-center cursor-pointer hover:bg-[#a9a9a9]">
                            10</div>
                        <div
                            class="h-[32px] w-[48px] bg-[#d9d9d9] flex justify-center items-center cursor-pointer hover:bg-[#a9a9a9]">
                            10.5</div>
                        <div
                            class="h-[32px] w-[48px] bg-[#d9d9d9] flex justify-center items-center cursor-pointer hover:bg-[#a9a9a9]">
                            11</div>
                        <div
                            class="h-[32px] w-[48px] bg-[#d9d9d9] flex justify-center items-center cursor-pointer hover:bg-[#a9a9a9]">
                            12</div>
                        <div
                            class="h-[32px] w-[48px] bg-[#d9d9d9] flex justify-center items-center cursor-pointer hover:bg-[#a9a9a9]">
                            13</div>
                    </div>
                    <p class="text-base font-semibold">Width</p>
                    <div class="flex flex-row text-base gap-[10px]">
                        <button type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2.5 mt-2.5 focus:outline-none">Small
                        </button>
                        <button type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2.5 mt-2.5 focus:outline-none">Medium
                        </button>
                        <button type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2.5 mt-2.5 focus:outline-none">Large
                        </button>
                    </div>
                </div>
                <div class="mt-[32px] md:mt-0">
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-2.5 mt-2.5 focus:outline-none md:min-w-[180px]">Add
                        to cart
                        <i class="fa-solid fa-arrow-right inline-block ml-[30px]"></i>
                    </button>
                </div>
            </div>
            <div
                class="flex flex-col md:flex-row md:px-[84px] py-[12px] items-start md:items-center justify-between lg:mt-[90px] md:mt-[44px] mt-[24px] gap-[20px] text-base font-semibold border-t border-b border-black">
                <div><a href="#product-desc">Product Description</a></div>
                <div><a href="#also-like">You May Also Like</a></div>
                <div><a href="#also-bought">Customer Also Bought</a></div>
                <div><a href="#reviews">Reviews</a></div>
            </div>
            <div id="product-desc" class="pb-[20px] border-b border-black">
                <h2 class="text-2xl font-semibold mt-[20px]">Product Description</h2>
                <p class="text-base font-semibold mt-[20px]">Puma Men's Caven Sneaker</p>
                <p class="text-sm text-justify mt-[20px]">Timeless sporty style infused with classy vibes in these men's
                    Puma Caven puma white/puma black court sneakers. Constructed of long-lasting upper with breathable
                    perforations at the front, these low-top sneakers come with a traditional round toe design, lace-up
                    closure, contrasting signature form strip overlays at the sides, gently padded tongue and collar for
                    smooth on and off, smooth fabric lining, removable footbed and a sturdy rubber outsole with
                    slip-resistant pattern.</p>
                <p class="text-sm text-justify leading-6">Item # 285001333</p>
                <p class="text-sm text-justify leading-6">UPC # 194579526433</p>
                <p class="text-base font-semibold mt-[20px]">FEATURES</p>
                <p class="text-sm text-justify leading-6 mt-[20px]">Synthetic leather upper</p>
                <p class="text-sm text-justify leading-6">Lace-up closure</p>
                <p class="text-sm text-justify leading-6">Round toe</p>
                <p class="text-sm text-justify leading-6">Soft fabric lining</p>
                <p class="text-sm text-justify leading-6">Padded tongue and collar</p>
                <p class="text-sm text-justify leading-6">Removable footbed</p>
                <p class="text-sm text-justify leading-6">Rubber outsole</p>
            </div>
            <div id="also-like" class="flex flex-col lg:pb-[60px] pb-[40px] border-b border-black">
                <h2 class="text-2xl font-semibold mt-[20px]">You May Also Like</h2>
                <div class="flex flex-col">
                    <div class="product__img bg-white w-full flex flex-col items-center">
                        <img src="../images/puma.png" alt="" class="block w-1/2">
                        <p class="text-base font-semibold">Puma Men's Caven Sneaker 1</p>
                        <p class="text-base font-semibold">$79.99</p>
                    </div>
                    <div class="product__img bg-white w-full flex flex-col items-center">
                        <img src="../images/puma.png" alt="" class="block w-1/2">
                        <p class="text-base font-semibold">Puma Men's Caven Sneaker 2</p>
                        <p class="text-base font-semibold">$89.99</p>
                    </div>
                    <div class="product__img bg-white w-full flex flex-col items-center">
                        <img src="../images/puma.png" alt="" class="block w-1/2">
                        <p class="text-base font-semibold">Puma Men's Caven Sneaker 3</p>
                        <p class="text-base font-semibold">$99.99</p>
                    </div>
                    <div class="product__img bg-white w-full flex flex-col items-center">
                        <img src="../images/puma.png" alt="" class="block w-1/2">
                        <p class="text-base font-semibold">Puma Men's Caven Sneaker 4</p>
                        <p class="text-base font-semibold">$109.99</p>
                    </div>
                    <div class="w-full items-center justify-center text-center py-2 product__slider-change mt-[22px]">
                        <div class="inline-block mr-[70px]"><i
                                class="fa-solid fa-chevron-left product__slider-prev cursor-pointer"></i>
                        </div>
                        <div
                            class="inline-block w-[15px] h-[15px] border border-black px-[5px] mx-[5px] product__slider-btn cursor-pointer active">
                        </div>
                        <div
                            class="inline-block w-[15px] h-[15px] border border-black px-[5px] mx-[5px] product__slider-btn cursor-pointer">
                        </div>
                        <div
                            class="inline-block w-[15px] h-[15px] border border-black px-[5px] mx-[5px] product__slider-btn cursor-pointer">
                        </div>
                        <div
                            class="inline-block w-[15px] h-[15px] border border-black px-[5px] mx-[5px] product__slider-btn cursor-pointer">
                        </div>
                        <div class="inline-block ml-[70px]"><i
                                class="fa-solid fa-chevron-right product__slider-next cursor-pointer"></i></div>
                    </div>
                </div>
            </div>
            <div id="also-bought" class="flex flex-col lg:pb-[60px] pb-[40px] border-b border-black">
                <h2 class="text-2xl font-semibold mt-[20px]">Customer Also Bought</h2>
                <div class="flex flex-col">
                    <div class="product__img bg-white w-full flex flex-col items-center">
                        <img src="../images/puma.png" alt="" class="block w-1/2">
                        <p class="text-base font-semibold">Puma Men's Caven Sneaker 1</p>
                        <p class="text-base font-semibold">$79.99</p>
                    </div>
                    <div class="product__img bg-white w-full flex flex-col items-center">
                        <img src="../images/puma.png" alt="" class="block w-1/2">
                        <p class="text-base font-semibold">Puma Men's Caven Sneaker 2</p>
                        <p class="text-base font-semibold">$89.99</p>
                    </div>
                    <div class="product__img bg-white w-full flex flex-col items-center">
                        <img src="../images/puma.png" alt="" class="block w-1/2">
                        <p class="text-base font-semibold">Puma Men's Caven Sneaker 3</p>
                        <p class="text-base font-semibold">$99.99</p>
                    </div>
                    <div class="product__img bg-white w-full flex flex-col items-center">
                        <img src="../images/puma.png" alt="" class="block w-1/2">
                        <p class="text-base font-semibold">Puma Men's Caven Sneaker 4</p>
                        <p class="text-base font-semibold">$109.99</p>
                    </div>
                    <div class="w-full items-center justify-center text-center py-2 product__slider-change mt-[22px]">
                        <div class="inline-block mr-[70px]"><i
                                class="fa-solid fa-chevron-left product__slider-prev cursor-pointer"></i>
                        </div>
                        <div
                            class="inline-block w-[15px] h-[15px] border border-black px-[5px] mx-[5px] product__slider-btn cursor-pointer active">
                        </div>
                        <div
                            class="inline-block w-[15px] h-[15px] border border-black px-[5px] mx-[5px] product__slider-btn cursor-pointer">
                        </div>
                        <div
                            class="inline-block w-[15px] h-[15px] border border-black px-[5px] mx-[5px] product__slider-btn cursor-pointer">
                        </div>
                        <div
                            class="inline-block w-[15px] h-[15px] border border-black px-[5px] mx-[5px] product__slider-btn cursor-pointer">
                        </div>
                        <div class="inline-block ml-[70px]"><i
                                class="fa-solid fa-chevron-right product__slider-next cursor-pointer"></i></div>
                    </div>
                </div>
            </div>
            <div id="reviews" class="pb-[20px]">
                <h2 class="text-2xl font-semibold mt-[20px] flex">Reviews (21)</h2>
                <form action="" class="my-[20px]">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-1/8">
                        Write a Review
                    </button>
                </form>
                <div class="review-item py-[20px]">
                    <p class="text-base font-semibold mt-[5px]">A bit more comfort than expected!</p>
                    <div class="review-info flex">
                        <p class="review-own text-base font-semibold mt-[5px] mr-[10px]">Me </p>
                        <p class="review-date text-base mt-[5px]"> - 25 Oct 2023</p>
                    </div>
                    <p class="text-sm text-justify mt-[5px]">
                        These aren't your typical AF1s! I was surprised at first when I tried it on,
                        but quickly realized that these shoes are built for the terrain! I took these
                        out to a local park trail with my son and they're pretty durable! I like the
                        comfort and the walkability of these shoes in rugged environments, similar to
                        a trail boot. I think the only thing I would add to this is a bit more color, as
                        I'm not a huge fan of all-black sneakers. A touch of white or another set of
                        laces would really make these pop a bit more.
                    </p>
                    <form action="" class="mt-[5px] text-lg float-right">
                        <button class="">
                            <i class="fa-solid fa-trash" style="color: #000000;"></i>
                        </button>
                    </form>
                </div>
                <div class="review-item py-[20px]">
                    <p class="text-base font-semibold mt-[5px]">A bit more comfort than expected!</p>
                    <div class="review-info flex">
                        <p class="review-own text-base mt-[5px] mr-[10px]">Victoria</p>
                        <p class="review-date text-base mt-[5px]"> - 25 Oct 2023</p>
                    </div>
                    <p class="text-sm text-justify mt-[5px]">
                        These aren't your typical AF1s! I was surprised at first when I tried it on,
                        but quickly realized that these shoes are built for the terrain! I took these
                        out to a local park trail with my son and they're pretty durable! I like the
                        comfort and the walkability of these shoes in rugged environments, similar to
                        a trail boot. I think the only thing I would add to this is a bit more color, as
                        I'm not a huge fan of all-black sneakers. A touch of white or another set of
                        laces would really make these pop a bit more.
                    </p>
                </div>
                <div class="review-item py-[20px]">
                    <p class="text-base font-semibold mt-[5px]">A bit more comfort than expected!</p>
                    <div class="review-info flex">
                        <p class="review-own text-base mt-[5px] mr-[10px]">Mr Bean</p>
                        <p class="review-date text-base mt-[5px]"> - 25 Oct 2023</p>
                    </div>
                    <p class="text-sm text-justify mt-[5px]">
                        These aren't your typical AF1s! I was surprised at first when I tried it on,
                        but quickly realized that these shoes are built for the terrain! I took these
                        out to a local park trail with my son and they're pretty durable! I like the
                        comfort and the walkability of these shoes in rugged environments, similar to
                        a trail boot. I think the only thing I would add to this is a bit more color, as
                        I'm not a huge fan of all-black sneakers. A touch of white or another set of
                        laces would really make these pop a bit more.
                    </p>
                </div>
                <form action="" class="my-[20px]">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                        More Reviews
                    </button>
                </form>
            </div>
        </div>
        <div class="footer bg-[#f2f2f2]">
            <div
                class="flex flex-row flex-wrap lg:flex-nowrap lg:py-[24px] lg:px-[193px] md:px-[200px] items-start lg:gap-[82px]  px-[50px] py-[50px]">
                <div class="w-1/2 md:w-1/3">
                    <p class="text-base font-semibold py-1">Company</p>
                    <p class="py-1"><a href="#" class="text-base">About Us</a></p>
                    <p class="py-1"><a href="#" class="text-base">Blog</a></p>
                    <p class="py-1"><a href="#" class="text-base">We're hiring</a></p>
                    <p class="py-1"><a href="#" class="text-base">Contact Us</a></p>
                </div>
                <div class="w-1/2 md:w-1/3">
                    <p class="text-base font-semibold py-1">Social</p>
                    <p class="py-1"><a href="#" class="text-base">Twitter</a></p>
                    <p class="py-1"><a href="#" class="text-base">Youtube</a></p>
                    <p class="py-1"><a href="#" class="text-base">Facebook</a></p>
                </div>
                <div class="w-full md:w-1/3 mt-[45px] md:mt-0">
                    <p class="text-base font-semibold py-1 ">Community</p>
                    <p class="py-1"><a href="#" class="text-base">Forums</a></p>
                    <p class="py-1"><a href="#" class="text-base">Support</a></p>
                    <p class="py-1"><a href="#" class="text-base">Documentation</a></p>
                </div>
                <div class="md:w-full mt-[45px] md:mt-[60px] lg:mt-0">
                    <p class="text-base font-semibold py-1">Sign Up For Email & Get 50 Points!</p>
                    <p class="py-1">Offer delivered within 4 days after signup.</p>
                    <div class="py-1">
                        <form action="">
                            <input type="text" id="small-input"
                                class="block w-full p-2 text-black border border-gray-300 rounded-lg bg-gray-50 sm:text-xs">
                            <button type="submit" id="add-btn"
                                class="text-white bg-[#0F6CBD] hover:bg-blue-800 font-medium rounded-md text-sm w-full sm:w-auto px-5 py-2.5 text-center mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../script/header.js"></script>
    <script src="../script/ProductDetail.js"></script>
</body>

</html>