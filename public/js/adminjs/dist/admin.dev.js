"use strict";

// NEED TO CHANGE

/*let achiev=document.querySelector('#showUsers');
achiev.addEventListener('click', function(){
    document.querySelector('.info').classList.toggle('#visible'); 
    console.log('click');
});*/
//i keep each button in a variable 
var displayBtn = document.querySelector('#showUsers');
var editBtn = document.querySelector('#editUsers');
var addBtn = document.querySelector('#addUsers');
var deleteBtn = document.querySelector('#delete');
var Tsection = document.querySelector('#toggleSection');
var info = document.querySelector('#info');
var click = 'click'; //forms/viewes

var display = document.querySelector('.display');
var add = document.querySelector('#addForm');
var edit = document.querySelector('#editForm'); //-----------------//

displayBtn.addEventListener('click', function () {
  Tsection.innerHTML = 'displayBtn clicked'; //display.classList.toggle('invisible'); 

  click = 'displayBtn';
  console.log(click);
});
editBtn.addEventListener('click', function () {
  Tsection.innerHTML = 'editBtn clicked';
  click = 'editBtn';
  console.log(click);
});
addBtn.addEventListener('click', function () {
  Tsection.innerHTML = 'addBtn clicked';
  click = 'addBtn';
  console.log(click);
});
deleteBtn.addEventListener('click', function () {
  Tsection.innerHTML = 'deleteBtn clicked';
  click = 'deleteBtn';
  console.log(click);
});