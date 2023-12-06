const btnSearch = document.querySelector('#btn-search');
const search = document.querySelector('.search');
const nav = document.querySelector('nav');
const menu = document.querySelector('.menu');
const iconBurger = document.querySelector('#btn-burger ion-icon');
const btnBurger = document.querySelector('#btn-burger');

// ##################
// Navigation
// ##################

btnSearch.addEventListener('click', ()=> {
  search.classList.toggle('active')
  menu.classList.remove('active')
  if(menu.classList.contains('active')){
    iconBurger.setAttribute('name', 'close-outline')
  }else {
    iconBurger.setAttribute('name', 'menu-outline')
  }
});

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
  nav.classList.toggle('active', window.scrollY > 0)
});

// ##################
// Filter
// ##################
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
    $('.filter-item').click(function(){
        $(this).addClass('filter-active').siblings().removeClass('filter-active')
    })
})


// ##############################
// Dashboard
// ##############################

jQuery(document).ready(function($) {
  const linksDashboard = $('.menu-dashboard a');
  const contents = $('.dashboard-content div');

  linksDashboard.on('click', function(e) {
    e.preventDefault();
    const contentId = $(this).data('content-id');
    
    contents.removeClass('active');
    $('#' + contentId).addClass('active');
  });
});