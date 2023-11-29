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
    <div id="main">
        <div class="sign flex flex-row h-[30px] fixed top-0 left-0 right-0 z-10 items-center md:px-[20px] px-[10px] justify-between bg-[#f2f2f2] text-sm">
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
                            <input type="text" id="search-info" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 pl-2.5 pr-12" placeholder="Search..." required>
                            <div class="header__search text-2xl px-4 absolute bottom-1/2 translate-y-1/2 right-[2%]">
                                <button type="submit" class="px-2 py-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="header__navbar-item w-full"><a href="../index.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Home</a>
                    </div>
                    <div class="header__navbar-item w-full"><a href="#" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Products</a>
                    </div>
                    <div class="header__navbar-item w-full"><a href="./News.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">News</a>
                    </div>
                    <div class="header__navbar-item w-full"><a href="./About.php" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">About</a>
                    </div>
                </div>
            </div>
            <div class="header__lg-search hidden lg:block text-2xl px-4 py-[10px] cursor-pointer order-3 relative min-w-[25%]">
                <i class="fa-solid fa-magnifying-glass absolute bottom-1/2 translate-y-1/2 right-[10%]"></i>
                <div class="header__lg-search">
                    <form action="">
                        <input type="text" id="search-info" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 pl-2.5 pr-12" placeholder="Search..." required>
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
        <div class="news-detail-container lg:px-[100px] px-[20px] py-[50px] mt-[95px]">
            <div class="flex flex-row flex-start items-center gap-[10px] mb-[50px]">
                <i class="fa-solid fa-chevron-left cursor-pointer block"></i>
                <p class="text-base underline underline-offset-4"><a href="./News.php">Back to news</a></p>
            </div>
            <img src="" alt="" class="w-full">
            <div class="error-content ">
                <strong class="md:text-[25px] text-[20px]">Wales Bonner's adidas Originals Fall/Winter 2023 Collection Debuts On November 8th</strong><br><br>
                <p class="text-[12px]">06/11/2023</p><br>
                <p>Wales Bonner isn't solely responsible for the revival of the adidas Samba, but the menswear brand has played an immense role in the sneaker's return to the mainstream. Unveiled on the runway back in April, the Fall/Winter 2023 collection by Grace Wales Bonner and adidas Originals launches on Wednesday, November 8th.</p><br>
                <p>As with Bonner's other work, her partnership with the Three Stripes continues to explore Afro-Atlantic legacy through sportswear. Off-pitch styles - elevated knitwear, football shorts - are accompanied by four makeovers of the Samba, adidas' oldest footwear design still in production.</p><br>
                <p>Two of the three Wales Bonner Sambas enjoy luxe, but faux pony hair uppers, marrying sportswear heritage with high fashion sensibilities. Gum soles also land on the pairs, complimenting the leopard print, light tan, and black makeovers found up-top. By contrast, a fourth adidas Originals style by the British designer opts for a mahogany brown hue that also appears throughout the Fall/Winter 2023 collection's apparel. Unlike the Samba OG, which has taken over social media feeds and city streets over the last three years, Bonner's styles feature the long, folded tongue that harkens back to the shoe's football origins.</p><br>
                <p>Enjoy detailed photos of the latest from the compelling partnership ahead. The Wales Bonner x adidas collection will be available globally on November 8th adidas.com and the adidas CONFIRMED app. Select retailers across the world will also offer the range of offerings on Wednesday. Each pair ranges from $180 USD to $220 USD.</p><br>
                <p>For more from the Three Stripes, check out the adidas Adios Pro Evo 1, the “super shoe” Tamirat Tola wore in his win at the 2023 New York City Marathon. Tola previously modeled for Wales Bonner.</p><br>
            </div>
            <div id="comments" class="pb-[20px]">
                <h2 class="text-2xl font-semibold mt-[20px] flex">Comments (21)</h2>
                <form action="" class="my-[20px]">
                    <textarea name="comment-content" id="comment-content" rows="3" class="w-full border-gray border-2 rounded-lg p-[20px]"></textarea>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-1/8">
                        Write a Comment
                    </button>
                </form>
                <div class="comment-item py-[20px]">
                    <div class="comment-info flex">
                        <p class="comment-own text-base font-semibold mt-[5px] mr-[10px]">Me </p>
                        <p class="comment-date text-base font-semibold mt-[5px]"> - 25 Oct 2023</p>
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
                <div class="comment-item py-[20px]">
                    <div class="comment-info flex">
                        <p class="comment-own text-base font-semibold mt-[5px] mr-[10px]">Victoria</p>
                        <p class="comment-date text-base font-semibold mt-[5px]"> - 25 Oct 2023</p>
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
                <div class="comment-item py-[20px]">
                    <div class="comment-info flex">
                        <p class="comment-own text-base font-semibold mt-[5px] mr-[10px]">Mr Bean</p>
                        <p class="comment-date text-base font-semibold mt-[5px]"> - 25 Oct 2023</p>
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
                        More Comments
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="footer bg-[#f2f2f2]">
        <div class="flex flex-row flex-wrap lg:flex-nowrap lg:py-[24px] lg:px-[193px] md:px-[200px] items-start lg:gap-[82px]  px-[50px] py-[50px]">
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
                        <input type="text" id="small-input" class="block w-full p-2 text-black border border-gray-300 rounded-lg bg-gray-50 sm:text-xs">
                        <button type="submit" id="add-btn" class="text-white bg-[#0F6CBD] hover:bg-blue-800 font-medium rounded-md text-sm w-full sm:w-auto px-5 py-2.5 text-center mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../script/header.js"></script>
</body>

</html>