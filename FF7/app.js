const navigation = document.querySelector('.navigation');
const burger = document.querySelector('#burger-menu');
const linkNavigation = document.querySelectorAll('.navigation a');
const sectionJeux = document.querySelector('#jeux');
const headingTitle = document.querySelector('.heading-title');

burger.addEventListener('click', ()=> {
  navigation.classList.toggle('active')
  burger.classList.toggle('bx-x')
});

linkNavigation.forEach(link => {
  link.addEventListener('click', ()=> {
    navigation.classList.remove('active')
  })
})



const scrollFunc = ScrollReveal ({
  distance: '60px',
  duration: 2500,
  delay: 400,
  reset: true
})

scrollFunc.reveal('.home-content', {delay: 200, origin: 'top' })
scrollFunc.reveal('.img-header', {delay: 200, origin: 'left' })
scrollFunc.reveal('.heading-title', {delay: 200, origin: 'left' })
scrollFunc.reveal('.boutique-box', {delay: 200, origin: 'top' })




var swiper = new Swiper(".personnages ", {
  spaceBetween: 50,
  centeredSlides: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

});