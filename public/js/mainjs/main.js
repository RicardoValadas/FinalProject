
//DropDown button desktop/nav
let dropButton = document.querySelector('.dropButton')
dropButton.addEventListener('click', function(){
    let hidden = document.querySelector('.dropHiddenTrue')
    console.log('hi')
    if (hidden.classList.contains('dropHiddenTrue')) {
        hidden.classList.toggle('dropHiddenFalse')
    } 
})

//DropDown mobile button 
let dropButtonRes = document.querySelector('.dropButtonRes')
dropButtonRes.addEventListener('click', function(){
    let hidden = document.querySelector('.contentDropdownLayoutRes')
    if (hidden.classList.contains('contentDropdownLayoutRes')) {
        hidden.classList.toggle('contentDropdownLayoutResShow')
    }
})
