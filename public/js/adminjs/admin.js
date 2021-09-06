// NEED TO CHANGE
/*let achiev=document.querySelector('#showUsers');
achiev.addEventListener('click', function(){
    document.querySelector('.info').classList.toggle('#visible'); 
    console.log('click');
});
/*
//i keep each button in a variable 

*/
//forms/viewes
let display =document.querySelector('.display');
let add =document.querySelector('#addForm');
let edit =document.querySelector('#editForm');
let addSection=document.querySelector('#editForm');
//-----------------//


let displayBtn=document.querySelector('#showUsers');
let editBtn=document.querySelector('#editUsers');
let addBtn=document.querySelector('#addUsers');
let deleteBtn=document.querySelector('#delete');
let Tsection =document.querySelector('#toggleSection');
let info =document.querySelector('#info');
let click ='click';



displayBtn.addEventListener('click', function(){
    Tsection.innerHTML='displayBtn clicked';
   display.classList.toggle('invisible'); 
    click ='displayBtn';
    console.log(click);
});
editBtn.addEventListener('click', function(){
    click ='editBtn';
    console.log(click);
});
addBtn.addEventListener('click', function(){
    
    click ='addBtn';
    console.log(click);
});
deleteBtn.addEventListener('click', function(){

    click ='deleteBtn';
    console.log(click);
});


