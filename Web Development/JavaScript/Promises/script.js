// Promises
// we can generate jokes using api=application programing interface
// it can return two conditions fullfilled or reject if fullfiled then display data.
// https://icanhazdadjoke.com
let para=document.getElementById('para');
let btn=document.getElementById('mybtn');


btn.addEventListener('click',()=>{


    const setHeader={
        headers:{
            Accept: "application/json"
        }
    }
    
    fetch('https://icanhazdadjoke.com', setHeader)
    .then((res)=>
        res.json()
        // console.log(res.json());
        // console.log(res.json().joke);
        ).then((data)=>{
        // console.log(data.joke);
        para.innerHTML=data.joke;
        
    }).catch((error)=>{
        console.log(error);
        
    })



})


