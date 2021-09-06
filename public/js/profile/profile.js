
const achiev=document.querySelector('#showachi');
    achiev.addEventListener('click', function(){
    document.querySelector('.achievments').classList.toggle('visible'); 
    //gets the score from the hidden input
    const score = document.querySelector('#scoreValue').value
    //checks the score
    console.log(score)
    //change here for the medal system
    if(score>=1){
    document.querySelector('participation').style.display= "none";
    console.log("hello");
    }
    
});


