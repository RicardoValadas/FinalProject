
//FETCH API FOR QUESTION
const start = document.querySelector('.start');

start.addEventListener('click', function() {

fetch('http://127.0.0.1:8000/quizTest')
.then(response => response.json())
.then(data => renderQuestions(data))
});

/* function random() {
  return Math.floor((Math.random() * 3))
} */


function renderQuestions(data) {
    const question = document.querySelector('#question')
    let answer = document.querySelector('.answer')
    const answer2 = document.querySelector('.secondAnswer')
    const answer3 = document.querySelector('.thirdAnswer')


  /*   let list = [1, 2, 3]
    list = list.sort(() => Math.random() - 0.5)
    console.log(list)
 
    let usedNumbers = []
let counter = 0

while(counter < 3){
    let math = Math.floor(Math.random() * 3)
    
    if(!usedNumbers.includes(math)){
        usedNumbers[counter] = math
        counter++
    }
}

console.log(usedNumbers.sort())
 */


    let newData =  data.Answers[Math.floor(Math.random() * 3)]['answer']


    console.log(newData)
  
    question.innerHTML = data.questions;
    answer.innerHTML = newData

    
   
}

//FETCH API FOR ANSWER
/* start.addEventListener('click', function() {
  const setup = document.querySelector('.firstAnswer')
  fetch('http://127.0.0.1:8000/quizAnswer')
  .then((response) => response.json())
  .then((data) => renderAnswers(data))
  });
  
  function renderAnswers(data) {
      const setup = document.querySelector('.firstAnswer')
      setup.innerHTML = data.answer;
  }
   */
 
//DISPLAY CONTENT WHEN START

start.addEventListener('click',function(){
  const game = document.querySelector('#questionsView')

  if (game.classList.contains('questionsViewHide')) {
    game.classList.toggle('questionsViewShow')
  }
  start.classList.add('questionsViewHide')
})

