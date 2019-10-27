
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

  const navSlide = () => {
    const nav-button = document.querySelector('.nav-button');
    const menu = document.querySelector('.menu');
    // const nav = document.querySelector('.');
    nav-button.addEventListener('click', () =>{
      menu.classList.toggle('nav-active');
    });
  }
navSlide();
})
