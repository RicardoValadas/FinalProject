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

}

//DISPLAY CONTENT WHEN START
start.addEventListener('click',function(){
  const game = document.querySelector('#questionsView')

  if (game.classList.contains('questionsViewHide')) {
    game.classList.toggle('questionsViewShow')
  }
  start.classList.add('questionsViewHide')
})

/* const form = document.querySelector('#form')
form.addEventListener('submit',formSubmit())
    function formSubmit(){
      const answer = document.querySelector('#answer1').value
      const answer2 = document.querySelector('#answer2').value
      const answer3 = document.querySelector('#answer3').value 
      let score = document.querySelector('input[name="quiz"]:checked').value;
      console.log(score + ' was selected!');
}
     */

