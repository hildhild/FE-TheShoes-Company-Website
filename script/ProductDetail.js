const btns = document.getElementsByClassName("product__slider-btn");
const slides = document.getElementsByClassName("product__img");
const prev = document.getElementsByClassName("product__slider-prev");
const next = document.getElementsByClassName("product__slider-next");
const maxSlides = 4;
var currentSlide1 = 0;
var currentSlide2 = 4;
var currentSlide3 = 8;

const chooseSlider1 = (num) => {
    for (let i = 0; i < 4; i++) {
        btns[i].classList.remove("active");
        if (!slides[i].classList.contains("my-hidden")) {
            slides[i].classList.add("my-hidden")
        }
    }
    if (!btns[num].classList.contains("active")) {
        btns[num].classList.add("active");
        slides[num].classList.remove("my-hidden");
        currentSlide1 = num;
    }
    clearInterval(autoChange1);
    autoChange1 = setInterval(() => {
        next[0].click();
    }, 3000)
}

const chooseSlider2 = (num) => {
    for (let i = 4; i < 8; i++) {
        btns[i].classList.remove("active");
        if (!slides[i].classList.contains("my-hidden")) {
            slides[i].classList.add("my-hidden")
        }
    }
    if (!btns[num].classList.contains("active")) {
        btns[num].classList.add("active");
        slides[num].classList.remove("my-hidden");
        currentSlide2 = num;
    }
    clearInterval(autoChange2);
    autoChange2 = setInterval(() => {
        next[1].click();
    }, 3000)
}

const chooseSlider3 = (num) => {
    for (let i = 8; i < 12; i++) {
        btns[i].classList.remove("active");
        if (!slides[i].classList.contains("my-hidden")) {
            slides[i].classList.add("my-hidden")
        }
    }
    if (!btns[num].classList.contains("active")) {
        btns[num].classList.add("active");
        slides[num].classList.remove("my-hidden");
        currentSlide3 = num;
    }
    clearInterval(autoChange3);
    autoChange3 = setInterval(() => {
        next[2].click();
    }, 3000)
}

prev[0].addEventListener('click', () => {
    if (currentSlide1 === 0) {
        currentSlide1 = maxSlides - 1;
    }
    else {
        currentSlide1--;
    }
    chooseSlider1(currentSlide1);
})

prev[1].addEventListener('click', () => {
    if (currentSlide2 === 4) {
        currentSlide2 = 7;
    }
    else {
        currentSlide2--;
    }
    chooseSlider2(currentSlide2);
})

prev[2].addEventListener('click', () => {
    if (currentSlide3 === 8) {
        currentSlide3 = 11;
    }
    else {
        currentSlide3--;
    }
    chooseSlider3(currentSlide3);
})

next[0].addEventListener("click", () => {
    if (currentSlide1 === maxSlides - 1) {
        currentSlide1 = 0;
    }
    else {
        currentSlide1++;
    }
    chooseSlider1(currentSlide1);
})

next[1].addEventListener("click", () => {
    if (currentSlide2 === 7) {
        currentSlide2 = 4;
    }
    else {
        currentSlide2++;
    }
    chooseSlider2(currentSlide2);
})

next[2].addEventListener("click", () => {
    if (currentSlide3 === 11) {
        currentSlide3 = 8;
    }
    else {
        currentSlide3++;
    }
    chooseSlider3(currentSlide3);
})

for (let i = 0; i < 4; i++) {
    btns[i].addEventListener('click', () => {
        chooseSlider1(i);
    })
}

for (let i = 4; i < 8; i++) {
    btns[i].addEventListener('click', () => {
        chooseSlider2(i);
    })
}

for (let i = 8; i < 12; i++) {
    btns[i].addEventListener('click', () => {
        chooseSlider3(i);
    })
}

var autoChange1 = setInterval(() => {
    next[0].click();
}, 3000)
var autoChange2 = setInterval(() => {
    next[1].click();
}, 3000)
var autoChange3 = setInterval(() => {
    next[2].click();
}, 3000)