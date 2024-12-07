let result2=document.querySelector('.mytext');
let btn=document.getElementById('btn');
btn.addEventListener('click',()=>{
    fetch('https://icanhazdadjoke.com/', {
        headers: {
          Accept: 'application/json'
        }
      })
        .then(response => response.json()) // Parse as JSON
        .then(result => {
            let jmd=result.joke;
            result2.innerHTML=`${jmd}`;
        //   console.log(result.joke); // Access the joke from the JSON response
        })
        .catch(error => console.error('Error:', error));
});



    