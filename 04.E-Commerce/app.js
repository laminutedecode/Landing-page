const searchContainer = document.querySelector('.search-container');
const btnSearch = document.querySelector('#search-icon');
const nav = document.querySelector('.navigation');
const burgerBtn = document.querySelector('#burger-menu');
const linkNav = document.querySelectorAll('.navigation a');
const cartBtn = document.querySelector('#cart-icon');
const cartContent = document.querySelector('.cart-container');
const userBtn = document.querySelector('#user-icon');
const userContent = document.querySelector('.user-container');
const header = document.querySelector('header');
const sections = document.querySelectorAll('section');

btnSearch.addEventListener('click', ()=> {
  searchContainer.classList.toggle('active')
  nav.classList.remove('active')
  burgerBtn.classList.remove('bx-x')
  cartContent.classList.remove('active')
  userContent.classList.remove('active')
});

burgerBtn.addEventListener('click', ()=> {
    nav.classList.toggle('active')
    burgerBtn.classList.toggle('bx-x')
    searchContainer.classList.remove('active')
    cartContent.classList.remove('active')
    userContent.classList.remove('active')
});

linkNav.forEach(link => {
    link.addEventListener('click', ()=> {
        nav.classList.remove('active')
        burgerBtn.classList.remove('bx-x')
        cartContent.classList.remove('active')
    });
})

cartBtn.addEventListener('click', ()=> {
  cartContent.classList.toggle('active')
  nav.classList.remove('active')
  searchContainer.classList.remove('active')
  burgerBtn.classList.remove('bx-x')
  userContent.classList.remove('active')
});

userBtn.addEventListener('click', ()=> {
  userContent.classList.toggle('active')
  nav.classList.remove('active')
  searchContainer.classList.remove('active')
  burgerBtn.classList.remove('bx-x')
  cartContent.classList.remove('active')
});

window.addEventListener('scroll', ()=> {
    header.classList.toggle('active', window.scrollY > 0)
});

window.addEventListener('scroll', ()=> {
  userContent.classList.remove('active')
  nav.classList.remove('active')
  searchContainer.classList.remove('active')
  burgerBtn.classList.remove('bx-x')
  cartContent.classList.remove('active')
});

const scrollActive = () => {
  sections.forEach(section => {
      let top = window.scrollY;
      let offset = section.offsetTop - 150;
      let height = section.offsetHeight;
      let id = section.getAttribute('id');

      if(top >= offset && top < offset + height) {
          linkNav.forEach(links => {
              links.classList.remove('active');
              document.querySelector(`.navigation a[href*=${id}]`).classList.add('active');
          })
      }
  })
}

window.addEventListener('scroll', scrollActive)

var swiper = new Swiper(".news-cont", {
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  centeredSlides: true,
  breakpoints : {
    0: {
      slidesPerView: 1,
    },
    568: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    1020: {
      slidesPerView: 3,
    },
  },


});