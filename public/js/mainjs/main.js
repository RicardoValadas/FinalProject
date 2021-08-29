
//DropDown button
let dropButton = document.querySelector('.dropButton')
dropButton.addEventListener('click', function(){
    let hidden = document.querySelector('.dropHiddenTrue')
    
    if (hidden.classList.contains('dropHiddenTrue')) {
        hidden.classList.toggle('dropHiddenFalse')
    } 
    
 
})
