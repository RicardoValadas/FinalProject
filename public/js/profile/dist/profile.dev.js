"use strict";

// NEED TO CHANGE

/*let buttonAchieve = document.querySelector('#buttonAchieve')
buttonAchieve.addEventListener('click', function(){
    let hidden = document.querySelector('#achieveSection')
    if (hidden.classList.contains('achieveHidden')) {
        hidden.classList.toggle('achieveShow')
    } 
})*/
var achiev = document.querySelector('#showachi');
achiev.addEventListener('click', function () {
  document.querySelector('.achievments').classList.toggle('visible');
  console.log('click');
});