var swiper = new Swiper(".home", {
    spaceBetween: 30,
    centeredSlides: true,
   
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  const navigation = document.querySelector('.navigation');
  const burger = document.querySelector('#burger-menu');
  const linkNavigation = document.querySelectorAll('.navigation a');

  burger.addEventListener('click', ()=> {
    navigation.classList.toggle('active')
    burger.classList.toggle('bx-x')
  });

  linkNavigation.forEach(link => {
    link.addEventListener('click', ()=> {
      navigation.classList.remove('active')
      burger.classList.remove('bx-x')
    })
  })

