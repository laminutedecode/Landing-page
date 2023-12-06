const search = document.querySelector('.search-container');
const searchBtn  = document.querySelector('#search-icon');
const header = document.querySelector('header');
const btnBurger = document.querySelector('#burger');
const navbar = document.querySelector('.navbar');
const links = document.querySelectorAll('.navbar a');


searchBtn.addEventListener('click', ()=> {
  search.classList.toggle('active')
  navbar.classList.remove('active');
});

window.addEventListener('scroll', ()=> {
    header.classList.toggle('active', window.scrollY > 0)
});

window.addEventListener('scroll', ()=> {
    search.classList.remove('active')
    navbar.classList.remove('active');
  
});

btnBurger.addEventListener('click', ()=> {
  navbar.classList.toggle('active')
  search.classList.remove('active')
});

links.forEach(link => {
   link.addEventListener('click', ()=> {
    navbar.classList.remove('active');
   });
})