const nav = document.querySelector('nav');
const btnBurger = document.querySelector('#btn-burger');
const iconBurger = document.querySelector('#btn-burger ion-icon');
const menu = document.querySelector('.menu');
const filterItems = document.querySelectorAll('.filter-item');
const postBoxes = document.querySelectorAll('.post-box');
const btnSearch = document.querySelector('#btn-search');
const search = document.querySelector('.search');

// ########################
// Navigation
// ########################

btnBurger.addEventListener('click', ()=> {
  menu.classList.toggle('active')
  search.classList.remove('active')
  if(menu.classList.contains('active')){
    iconBurger.setAttribute('name', 'close-outline')
  }else {
    iconBurger.setAttribute('name', 'menu-outline')
  }
});

window.addEventListener('scroll', ()=> {
  nav.classList.toggle('active', window.scrollY > 0);
});

btnSearch.addEventListener('click', ()=> {
  search.classList.toggle('active')
  menu.classList.remove('active')
  if(menu.classList.contains('active')){
    iconBurger.setAttribute('name', 'close-outline')
  }else {
    iconBurger.setAttribute('name', 'menu-outline')
  }
});

// ########################
// Filtre
// ########################

$(document).ready(function(){
    $('.filter-item').click(function(){
        const value = $(this).attr('data-filter');
        if(value == 'all'){
            $('.post-box').show('1000')
        }else {
            $('.post-box').not('.'+value).hide('1000');
            $('.post-box').filter('.'+value).show('1000');
        }
    });
    // Class active
    $('.filter-item').click(function(){
        $(this).addClass('filter-active').siblings().removeClass('filter-active')
    })
})

