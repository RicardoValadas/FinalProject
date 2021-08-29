const start = document.querySelector('#start');

start.addEventListener('click', function(quiz) {




fetch('https://official-joke-api.appspot.com/random_joke')
.then((response) => response.json())
.then((data) => renderAnswers(data))
});

function renderAnswers(data) {
    const setup = document.querySelector('#answers')
    setup.innerHTML = data.setup;
}
 


/*
  function createAnswers(answersArray) {

       for (answers of answersArray)
       {
               const clone = document.querySelector('#questionsView')
                document.querySelector('#questionsView').append(clone);

                clone.querySelector('p').innerText = answers.content;

       }

  } 
*/