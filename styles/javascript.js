
$(document).ready(function(){
  window.onscroll = function() { myFunction()};

  var navigation = document.getElementById("navigation");
  var sticky = navigation.offsetTop;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navigation.classList.add("sticky");
    } else {
      navigation.classList.remove("sticky");
    }
  }


})

// dashboard nav show or hide
const navSlide = () => {
  const button = document.querySelector('.nav-button');
  const menu = document.querySelector('.menu');
  const links = document.querySelectorAll('.nav-link');

  button.addEventListener('click',() => {
    menu.classList.toggle('nav-active');
    });

  for(var i=0; links.length; i++){
  var self = links[i];
  self.addEventListener('click', () => {
    if(window.innerWidth < 768 ){
      menu.classList.toggle('nav-active');
    }
  })
  }

}
navSlide();
