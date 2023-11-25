<div class="header flex justify-between lg:px-[60px] px-[40px] bg-[#f2f2f2] fixed top-0 left-0 right-0">
    <div class="header__logo order-2 lg:order-1">
        <img src="../../images/logo.svg" alt="">
    </div>
    <div class="header__navbar flex items-center order-1 lg:order-2 lg:mr-auto lg:ml-[62px]">
        <i class="header__navbar-icon lg:hidden fa-solid fa-bars text-3xl"></i>
        <div class="header__navbar-container flex flex-col absolute top-[65px] left-0 right-0 items-start lg:static lg:flex-row lg:items-center bg-white lg:bg-[#f2f2f2]">
            <div class="lg:hidden header__search-container header__navbar-item w-full md:px-[25px] px-[18px] py-[10px] relative">
                <form action="">
                    <input type="text" id="search-info" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 pl-2.5 pr-12" placeholder="Search..." required>
                    <div class="header__search text-2xl px-4 absolute bottom-1/2 translate-y-1/2 right-[2%]">
                        <button type="submit" class="px-2 py-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>

            <div class="header__navbar-item w-full"><a href="#" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Home</a>
            </div>
            <div class="header__navbar-item w-full"><a href="#" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Products</a>
            </div>
            <div class="header__navbar-item w-full"><a href="#" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">News</a>
            </div>
            <div class="header__navbar-item w-full"><a href="#" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">Support</a>
            </div>
            <div class="header__navbar-item w-full"><a href="#" class="md:px-[25px] px-[18px] lg:py-[16.5px] py-[10px] block w-full text-xl font-semibold lg:text-2xl">About</a>
            </div>
        </div>
    </div>
    <div class="header__lg-search hidden lg:block text-2xl px-4 py-[16.5px] cursor-pointer order-3 relative min-w-[25%]">
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