var counter = 0;
function increment(){
    counter++;
    console.log(counter);
}

//Store start variable for button
const start = document.querySelector('.start');
  
//Add event listener when click
start.addEventListener('click', function() {

//FETCH API FOR QUESTION
fetch('http://127.0.0.1:8000/quizTest')
.then(response => response.json())
.then(data => renderQuestions(data))
});

//Randomize possible numbers and check if the number assigned is already being used later with ranNums.next().value
function* shuffle(array) {

  let i = array.length;

  while (i--) {
      yield array.splice(Math.floor(Math.random() * (i+1)), 1)[0];
  }
}  

let ranNums = shuffle([0,1,2]);

let store1 = ranNums.next().value
let store2 = ranNums.next().value
let store3 = ranNums.next().value


function renderQuestions(data) {
 /*  console.log(JSON.stringify(data.id))
  console.log(JSON.stringify(data.Answers[store1]['id'])) */
 
  //Get html classes to display the values
    const question = document.querySelector('#question')
    const answer = document.querySelector('.answer')
    const answer2 = document.querySelector('.answer2')
    const answer3 = document.querySelector('.answer3')

    //Get the data with random numbers
    let newData =  data.Answers[store1]['answer']
    let newData2 =  data.Answers[store2]['answer']
    let newData3 =  data.Answers[store3]['answer']
    //Insert in html
    question.innerHTML = data.questions;

    answer.innerHTML = newData
    answer2.innerHTML = newData2
    answer3.innerHTML = newData3  
    //store to use in another function
    sessionStorage.setItem("correct",data.Answers[0]['answer'])
}

//DISPLAY CONTENT WHEN START
start.addEventListener('click',function(){
  const game = document.querySelector('#questionsView')

  if (game.classList.contains('questionsViewHide')) {
    game.classList.toggle('questionsViewShow')
  }
  start.classList.add('questionsViewHide')
})

  let button1 = document.querySelector('.answer')
  button1.addEventListener('click', function(){
    let buttonValue1 = button1.innerHTML
    sessionStorage.setItem("answer1",buttonValue1)
    let correctAnswer = sessionStorage.getItem('correct');
    
  })

  let button2 = document.querySelector('.answer2')
  button2.addEventListener('click', function(){
    let buttonValue2 = button2.innerHTML
    sessionStorage.setItem("answer2",buttonValue2)
    let correctAnswer = sessionStorage.getItem('correct');
   
  })

  let button3 = document.querySelector('.answer3')
  button3.addEventListener('click', function(){
    let buttonValue3 = button3.innerHTML
    sessionStorage.setItem("answer3",buttonValue3)
    let correctAnswer = sessionStorage.getItem('correct');
    
  })


const form = document.querySelector('#form')
form.addEventListener('submit',formSubmit())

    function formSubmit(){
      let answer1 = sessionStorage.getItem('answer1');
      let answer2 = sessionStorage.getItem('answer2');
      let answer3 = sessionStorage.getItem('answer3');
      let correct = sessionStorage.getItem('correct');
     
      if(answer1 == correct){
        alert('Correct you got 1 point')
        increment()
      } else if(answer2 == correct){
        alert('Correct you got 1 point')
        increment()
      } else if(answer3 == correct){
        alert('Correct you got 1 point')
        increment()
      } 

}


