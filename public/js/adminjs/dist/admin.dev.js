"use strict";

// NEED TO CHANGE
var achiev = document.querySelector('#showUsers');
achiev.addEventListener('click', function () {
  document.querySelector('.info').classList.toggle('#visible');
  console.log('click');
}); //we could give id some but