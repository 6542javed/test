
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
