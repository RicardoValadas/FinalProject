
const achiev=document.querySelector('#showachi');
    achiev.addEventListener('click', function(){
    document.querySelector('.achievments').classList.toggle('visible'); 
    //gets the score from the hidden input
    const score = document.querySelector('#scoreValue').value
    //checks the score
    //change here for the medal system

    //particpation
    if(score>=1){
    document.querySelector('#participation').style.display= "block";
   
    //bronze
    }
    if(score>=10){
    document.querySelector('#bronze').style.display= "block";
   

    //silver
    }
    if(score>=30){
    document.querySelector('#silver').style.display= "block";
   
    //gold
    }
    if(score>=50){
    document.querySelector('#gold').style.display= "block";
   
    }
    
});


