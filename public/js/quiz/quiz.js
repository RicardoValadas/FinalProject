
//FETCH API FOR QUESTION
const start = document.querySelector('.start');

start.addEventListener('click', function() {

fetch('http://127.0.0.1:8000/quizTest')
.then(response => response.json())
.then(data => renderQuestions(data))
});

function renderQuestions(data) {
    const question = document.querySelector('#question')
    const answer = document.querySelector('.firstAnswer')
    const answer2 = document.querySelector('.secondAnswer')
    const answer3 = document.querySelector('.thirdAnswer')
    console.log(data)
    let newData = JSON.stringify( data.Answers[0],['answer'])
   
    let newData2 = JSON.stringify(data.Answers[1],['answer'])
    let newData3 = JSON.stringify(data.Answers[2],['answer'])
    console.log(newData)
    console.log(newData2)
    console.log(newData3)
  

    question.innerHTML = data.questions;
    answer.innerHTML = newData
    answer2.innerHTML = newData2
    answer3.innerHTML = newData3
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

