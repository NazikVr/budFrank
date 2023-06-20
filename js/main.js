$('.slider').on('init afterChange', function (event, slick, currentSlide, nextSlide) {
  let totalSlides = slick.slideCount;
  let currentSlideIndex = currentSlide + 1;

  
  if (isNaN(currentSlideIndex)) {
    $('.slider-num').html( '1' + ' / ' + totalSlides);
  } else {
    $('.slider-num').html(currentSlideIndex + ' / ' + totalSlides);
  }
});

$('.slider').slick({
  autoplay: true,
  speed: 1500,
  autoplaySpeed: 3333,
  dots: true,
  swipeToSlide: true,
  swipe: true,
  vertical: true,
  verticalSwiping: true,
  mouseWheel: true,
});


const select = document.querySelector('select');
const allLang = ['ua', 'rus', 'en', 'de', 'sp']

select.addEventListener('change', changeURLLanguage);

function changeURLLanguage() {
  let lang = select.value;
  location.href = window.location.pathname + '#' + lang;
  location.reload();
}

function changeLanguage() {
  let hash = window.location.hash;
  hash = hash.substring(1);
  console.log(hash);
  if (!allLang.includes(hash)) {
    location.href = window.location.pathname + '#ua';
    location.reload();
  }
  select.value = hash;
  document.querySelector('title').innerHTML = langArr['company'][hash];
  for (let key in langArr) {
    let elem = document.querySelector('.lng-' + key);
    if (elem) {
      elem.innerHTML = langArr[key][hash];
    }
  }
  let linkLog = document.getElementById('logo');
  linkLog.href += '#' + hash;
  let linlCont = document.getElementById('contact');
  linlCont.href += '#' + hash;
  let linkGal = document.getElementById('gallery');
  linkGal.href += '#' + hash;
}

changeLanguage();