// NEED TO CHANGE
let buttonAchieve = document.querySelector('#buttonAchieve')
buttonAchieve.addEventListener('click', function(){
    let hidden = document.querySelector('#achieveSection')
    if (hidden.classList.contains('achieveHidden')) {
        hidden.classList.toggle('achieveShow')
    } 
})
