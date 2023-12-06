
/* ################################## 
 Navigation
 ##################################  */
 
 const btnNavigation = document.querySelector(".burger");
 const menuNavigation = document.querySelector('.nav-liens')
 const itemsNavigation = document.querySelectorAll("nav-liens li a");
 
 btnNavigation.addEventListener("click", () => {
     menuNavigation.classList.toggle("active");
     if (menuNavigation.classList.contains('active')) {
         btnNavigation.innerHTML = `<ion-icon name="close-outline"></ion-icon>`
        } else {
            btnNavigation.innerHTML = `<ion-icon name="menu-outline"></ion-icon>`
        } 
    });
    itemsNavigation.forEach(function(lien) {
       lien.addEventListener("click", function() {
           menuNavigation.classList.remove("active");
       });
     });

// ####################################################
// Modale
// ####################################################

const btnSearch = document.querySelector('.nav-search')
const modalSearch = document.querySelector(' .nav-modal-search')

btnSearch.addEventListener('click', () => {
   modalSearch.classList.toggle('active')
}) 

 /* ################################## 
 filtre formation
 ##################################  */

 const langagesSelectFormation = document.getElementById('langages-formations');
 const formationsListe = document.getElementById('formations');
 
 function filtrerListeFormation() {
   const langageSelectionneFormations = langagesSelectFormation.value;
   for (const element of formationsListe.children) {
     const classes = element.className.split(' ');
     if ((langageSelectionneFormations === 'tous' || classes.includes(langageSelectionneFormations))
      ) {
       element.style.display = 'block';
     } else {
       element.style.display = 'none';
     }
   }
 }
 
 langagesSelectFormation.addEventListener('change', filtrerListeFormation);

