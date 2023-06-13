const sliderItems = document.querySelector('.slider-items');
const sliderItemWidth = document.querySelector('.slider-item').clientWidth;
const sliderBtnPrev = document.querySelector('.slider-btn-prev');
const sliderBtnNext = document.querySelector('.slider-btn-next');
let currentIndex = 0;

function goToSlide(index) {
  if (index < 0) {
    index = sliderItems.children.length - 1;
  } else if (index > sliderItems.children.length - 1) {
    index = 0;
  }
  sliderItems.style.transform = `translateX(-${sliderItemWidth * (index/2)}px)`;
  currentIndex = index;
}

sliderBtnPrev.addEventListener('click', () => {
  goToSlide(currentIndex - 1);
});

sliderBtnNext.addEventListener('click', () => {
  goToSlide(currentIndex + 1);
});

setInterval(() => {
  goToSlide(currentIndex + 1);
}, 3000);

goToSlide(0);



