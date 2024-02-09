const btnBurger = document.querySelector('#burger-menu');
const menu = document.querySelector('.menu');
const nav = document.querySelector('nav');
const iconBurger = document.querySelector('#burger-menu ion-icon');
const sections = document.querySelectorAll('section');
const links = document.querySelectorAll('.menu li a');


// ##########################
// Navigation
// ##########################

btnBurger.addEventListener('click', ()=> {
  menu.classList.toggle('active');
  nav.classList.add('active');
  if(menu.classList.contains('active')){
    iconBurger.setAttribute('name', 'close-outline')
  }else {
    iconBurger.setAttribute('name', 'menu-outline')
  }
});

window.addEventListener('scroll', ()=> {
  nav.classList.toggle('active', window.scrollY > 0);
});

links.forEach(link => {
  link.addEventListener('click', ()=> {
    menu.classList.remove('active');
  if(menu.classList.contains('active')){
    iconBurger.setAttribute('name', 'close-outline')
  }else {
    iconBurger.setAttribute('name', 'menu-outline')
  }
  });
})

window.addEventListener('scroll', ()=> {
  menu.classList.remove('active')
  if(menu.classList.contains('active')){
    iconBurger.setAttribute('name', 'close-outline')
  }else {
    iconBurger.setAttribute('name', 'menu-outline')
  }
});




function setActiveLink() {
  let currentScroll = window.scrollY;

  sections.forEach((section) => {
    if (section.offsetTop <= currentScroll && section.offsetTop + section.offsetHeight > currentScroll) {
      links.forEach((link) => {
        link.classList.remove('active');
        if (link.getAttribute('href').substring(1) === section.id) {
          link.classList.add('active');
        }
      });
    }
  });
}

document.addEventListener('scroll', setActiveLink);


// ##########################
// Effet tilts
// ##########################


// Définition de la fonction qui ajoute l'effet de basculement (tilt)
function addTiltEffect(element) {
  // Ajoute un écouteur d'événement pour le mouvement de la souris
  element.addEventListener('mousemove', function(e) {
      // Obtient les dimensions et la position de l'élément
      const bounding = element.getBoundingClientRect();
      // Calcule les coordonnées du centre de l'élément
      const centerX = bounding.left + bounding.width / 2;
      const centerY = bounding.top + bounding.height / 2;
      // Calcule la distance entre le curseur de la souris et le centre de l'élément
      const offsetX = e.clientX - centerX;
      const offsetY = e.clientY - centerY;
      // Calcule l'angle de basculement sur l'axe X et Y
      const tiltX = (offsetY / centerY) * 50;
      const tiltY = -(offsetX / centerX) * 50;

      // Applique la transformation CSS pour créer l'effet de basculement
      element.style.transform = `rotateX(${tiltX}deg) rotateY(${tiltY}deg)`;
  });

  // Ajoute un écouteur d'événement pour quand la souris sort de l'élément
  element.addEventListener('mouseout', function() {
      // Réinitialise la transformation pour revenir à la position initiale
      element.style.transform = 'rotateX(0deg) rotateY(0deg)';
  });
}

// Sélectionne tous les éléments avec la classe "team-box"
const teamBoxes = document.querySelectorAll('.team-box');

// Applique l'effet de basculement à chaque élément
teamBoxes.forEach(addTiltEffect);













