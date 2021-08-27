const start = document.querySelector('#start');

/* start.addEventListener('click', function(quiz) {
if (!quiz.target.matches('#start'))
})
 */



fetch('https://official-joke-api.appspot.com/random_joke')
.then(response => response.json())
.then(quote => console.log(quote))
 



/*   function createAnswers(answersArray) {

       for (answers of answersArray)
       {
               const clone = document.querySelector('#questionsView')
                document.querySelector('#questionsView').append(clone);

                clone.querySelector('p').innerText = answers.content;

       }

  } */