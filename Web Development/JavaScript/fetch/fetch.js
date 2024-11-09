// Fetch function in javaScript
let para=document.getElementById('para');
// console.log(para);
let btn=document.querySelector('#btn');
btn.addEventListener('click',()=>{
    
const setHeader={
    headers: {
        Accept: "application/json"
}
}

fetch('https://www.dbooks.org/api/recent', setHeader)
    .then((response) => response.json())
    .then((data) => {
    //   console.log(data);
      let booksHtml = '';
      data.books.forEach((book) => {
        booksHtml += `
          <div>
            <h2>${book.title}</h2>
            <p>${book.subtitle}</p>
            <p>Authors: ${book.authors}</p>
            <img src="${book.image}" alt="${book.title}">
          </div>
        `;
      });
      para.innerHTML = booksHtml;
    })
    .catch((error) => {
      console.log('connection error');
      para.innerHTML = 'Error fetching books data.';
    });
// let link="https://icanhazdadjoke.com/";
// fetch('https://www.dbooks.org/api/recent',setHeader)
// .then((response)=>{
//     // console.log(response.text());
//     return response.json();
      
// }).then((data)=>{
//     console.log(data);
//     // document.write(data);
//     setTimeout(() => {
        
//         // para.innerHTML=data.books;

//     }, 2000);
    
// }).catch((error)=>{
//     console.log('connection error');
    
// });
});

