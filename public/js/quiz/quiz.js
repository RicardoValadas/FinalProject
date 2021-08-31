
//FETCH API FOR QUESTION
const start = document.querySelector('.start');

start.addEventListener('click', function(quiz) {

fetch('https://official-joke-api.appspot.com/random_joke')
.then((response) => response.json())
.then((data) => renderAnswers(data))
});

function renderAnswers(data) {
    const setup = document.querySelector('#question')
    setup.innerHTML = data.questions;
}
 
//DISPLAY CONTENT WHEN START

start.addEventListener('click',function(){
  const game = document.querySelector('#questionsView')

  if (game.classList.contains('questionsViewHide')) {
    game.classList.toggle('questionsViewShow')
  }
  start.classList.add('questionsViewHide')
})

