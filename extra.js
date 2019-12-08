  $(window).scroll(function(){
    parallex();
  })

  function parallex(){
  var wScroll = $(window).scrollTop();
  $('.hero').css('background-position', 'center '+(wScroll * 0.7)+'px');
  $('.text').css('top', (wScroll)+'px');
  }

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
      opt1.value = "1";
      opt2.value = "2";
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
      opt1.value = "1";
      opt2.value = "2";
      opt3.value = "3";
      opt4.value = "4";
      opt5.value = "5";
      opt6.value = "6";
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



var count_qImages = 5;

function addMore(){
  var file_div_qPaper = document.getElementById('file_div_qPaper');

  // var input_bar = document.createElement('INPUT');
  // input_bar.setAttribute('type','file');
  // input_bar.setAttribute('name','qPaper_'+count_qImages);
  // // input_bar.name = "qPaper_"+count_qImages;
  // // input_bar.type = file;
  //
  // file_div_qPaper.input.add(input_bar);
  count_qImages++;

  if(count_qImages<=20){
  newInput = "qPaper_"+count_qImages;
  file_div_qPaper.insertAdjacentHTML('beforeend', '<div class="files"><label for="'+newInput+'">Page '+ count_qImages +'</label><input type="file" id="'+newInput+'" name="'+newInput+'" required></input></div>');
  // file_div_qPaper.innerHTML = file_div_qPaper.innerHTML + '<div class="files"><label for="'+newInput+'">Page '+ count_qImages +'</label><input type="file" id="'+newInput+'" name="'+newInput+'"></input></div>';
}}


function test(){
  echo "sfsf";
}
test();
