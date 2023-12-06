const sections = document.querySelectorAll('section');
const header = document.querySelector('header');
const btnBurger = document.querySelector('#burger-menu');
const nav = document.querySelector('.navigation');
const linkNav = document.querySelectorAll('.navigation a');


btnBurger.addEventListener('click', ()=> {
  nav.classList.toggle('active')
  btnBurger.classList.toggle('bx-x')
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