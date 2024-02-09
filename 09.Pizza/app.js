const sections = document.querySelectorAll('section');
const header = document.querySelector('header');
const btnBurger = document.querySelector('#burger-menu');
const nav = document.querySelector('.navigation');
const linkNav = document.querySelectorAll('.navigation a');
const darkmode = document.querySelector('#dark-mode');


btnBurger.addEventListener('click', ()=> {
  nav.classList.toggle('active')
  btnBurger.classList.toggle('bx-x')
  if(window.scrollY == 0){
    header.classList.toggle('active')
 }
});

linkNav.forEach(link => {
    link.addEventListener('click', ()=> {
        nav.classList.remove('active')
       btnBurger.classList.remove('bx-x')
    });
})

window.addEventListener('scroll', ()=> {
  nav.classList.remove('active')
  btnBurger.classList.remove('bx-x')
});


window.addEventListener('scroll', ()=> {
  header.classList.toggle('active', window.scrollY > 0)
});


const scrollActive = () => {
  sections.forEach(section => {
      let top = window.scrollY;
      let offset = section.offsetTop - 100;
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


darkmode.addEventListener('click', ()=> {
  if(darkmode.classList.contains('bx-moon')){
    darkmode.classList.replace('bx-moon', 'bx-sun')
    document.body.classList.add('active')
  }else {
    darkmode.classList.replace('bx-sun', 'bx-moon')
    document.body.classList.remove('active')
  }
});


const sr = ScrollReveal({
  origin: 'top',
  distance: '40px',
  duration: 2000,
  reset: true
})

sr.reveal('.home-content, .home-img, .about-img, .about-content, .services-box, .menu-box, .contact form, .btn, .section-heading', {interval: 200})