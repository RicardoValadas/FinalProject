// NEED TO CHANGE
/*let buttonAchieve = document.querySelector('#buttonAchieve')
buttonAchieve.addEventListener('click', function(){
    let hidden = document.querySelector('#achieveSection')
    if (hidden.classList.contains('achieveHidden')) {
        hidden.classList.toggle('achieveShow')
    } 
})*/


let achiev=document.querySelector('#showachi');
achiev.addEventListener('click', function(){
    document.querySelector('.achievments').classList.toggle('visible'); 
    
    let score= document.querySelector('.userscore').value;

    if(score>=1){
    document.querySelector('participation').style.display= "none";
    console.log("hello");
    }
    
});

