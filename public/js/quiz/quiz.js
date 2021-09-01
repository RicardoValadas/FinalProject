
//FETCH API FOR QUESTION
const start = document.querySelector('.start');

start.addEventListener('click', function() {

fetch('http://127.0.0.1:8000/quizTest')
.then((response) => response.json())
.then((data) => renderQuestions(data))
});

function renderQuestions(data) {
    const setup = document.querySelector('#question')
    setup.innerHTML = data.questions;
}

//FETCH API FOR ANSWER
start.addEventListener('click', function() {

  fetch('http://127.0.0.1:8000/quizAnswer')
  .then((response) => response.json())
  .then((data) => renderAnswers(data))
  });
  
  function renderAnswers(data) {
      const setup = document.querySelector('.firstAnswer')
      setup.innerHTML = data.answer;
  }
  
 
//DISPLAY CONTENT WHEN START

start.addEventListener('click',function(){
  const game = document.querySelector('#questionsView')

  if (game.classList.contains('questionsViewHide')) {
    game.classList.toggle('questionsViewShow')
  }
  start.classList.add('questionsViewHide')
})

