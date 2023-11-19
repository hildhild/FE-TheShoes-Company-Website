document.querySelector(".header__navbar-icon").addEventListener('click', function() {
    document.querySelector(".header__navbar-container").classList.toggle("my-hidden");
})

const navBtns = document.getElementsByClassName("slider__btn");
var currentSlide = 0;
const chooseSlider = (num) => {
    for (let i = 0; i < navBtns.length; ++i) {
        navBtns[i].classList.remove("active");
    }
    if (!navBtns[num].classList.contains("active")) {
        navBtns[num].classList.add("active");
        currentSlide = num;
    }
}

for (let i = 0; i < navBtns.length; ++i) {
    navBtns[i].addEventListener("click", () => chooseSlider(i));
}


const prev = document.getElementsByClassName("slider__prev")[0];
const next = document.getElementsByClassName("slider__next")[0];

prev.addEventListener("click", () => {
    if (currentSlide === 0) {
        currentSlide = navBtns.length - 1;
    } 
    else {
        currentSlide--;
    }
    chooseSlider(currentSlide);
})

next.addEventListener("click", () => {
    if (currentSlide === navBtns.length - 1) {
        currentSlide = 0;
    } 
    else {
        currentSlide++;
    }
    chooseSlider(currentSlide);
})