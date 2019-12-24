
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
    button.classList.toggle('btn-active');
    });

  for(var i=0; links.length; i++){
  var self = links[i];
  self.addEventListener('click', () => {
    if(window.innerWidth < 768 ){
      menu.classList.toggle('nav-active');
      button.classList.toggle('btn-active');
    }
  })
  }

}
navSlide();


/*Dropdown Code*/
function removeAll(s2){
  for (var i = s2.options.length -1; i >= 0; i--) {
    s2.remove(i);
  }
}

function insertOptions(s1,s2){
    var s1 = document.getElementById('s1');
    var s2 = document.getElementById('s2');

    if(s1.options[s1.selectedIndex].value == "HS"){
      var opt1 = document.createElement('option');
      var opt2 = document.createElement('option');
      opt1.value = "HS 1st Year";
      opt2.value = "HS 2nd Year";
      opt1.innerHTML = "1st Year";
      opt2.innerHTML = "2nd Year";
      removeAll(s2);
      s2.options.add(opt1);
      s2.options.add(opt2);
    }else if(s1.options[s1.selectedIndex].value == "TDC"){
      var opt1 = document.createElement('option');
      var opt2 = document.createElement('option');
      var opt3 = document.createElement('option');
      var opt4 = document.createElement('option');
      var opt5 = document.createElement('option');
      var opt6 = document.createElement('option');
      opt1.value = "1st Semester";
      opt2.value = "2nd Semester";
      opt3.value = "3rd Semester";
      opt4.value = "4th Semester";
      opt5.value = "5th Semester";
      opt6.value = "6th Semester";
      opt1.innerHTML = "1st Semester";
      opt2.innerHTML = "2nd Semester";
      opt3.innerHTML = "3rd Semester";
      opt4.innerHTML = "4th Semester";
      opt5.innerHTML = "5th Semester";
      opt6.innerHTML = "6th Semester";
      removeAll(s2);
      s2.options.add(opt1);
      s2.options.add(opt2);
      s2.options.add(opt3);
      s2.options.add(opt4);
      s2.options.add(opt5);
      s2.options.add(opt6);
    }
}


//
// // resources/upload_paper.php dynamic file input
// var count_qImages = 5;
//
// function addMore(file_div_qPaper){
//   var fileContainer = document.getElementById('file_div_qPaper');
//
//   var input_bar = document.createElement('input');
//   input_bar.name = "qPaper_"+count_qImages;
//   input_bar.type = file;
//
//   file_div_qPaper.add(input_bar);
//
//   count_qImages++;
// }
//
