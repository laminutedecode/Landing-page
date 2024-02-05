
//  ####################### Nav
const burger = document.querySelector('.nav-burger')
const nav = document.querySelector('.nav-menu')
burger.addEventListener('click', ()=> {
  burger.classList.toggle('active');
  nav.classList.toggle('active');
})