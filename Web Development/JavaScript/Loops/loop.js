// each loop in used to iterate the elements in javaScripts
// while loop
console.log("This is the example of while loop");

let i=1;
while (i<=4) {
    console.log(i);
    i++;
    
}


// do-while loop 
console.log("===========Do-while loop=====");

let j=1;
do {
    console.log(j);
    j++;
    
} while (j<=4);

// for loop
console.log("===========For loop=====");
for(let c=0;c<=4;c++)
{
    console.log(c);
    
}
console.log("===========For in loop=====");
// for loop have also a three types
let myfriends=['Ali','Qasim','Noman','jmd'];   //this is an array
for(let elements in myfriends)
{
    // form in loop only display the index number of an array
    console.log(elements);
    
}


console.log("===========For of loop=====");
for (let jmd of myfriends) {
    // for of loop display the elements in an array
    console.log(jmd);
    
}


console.log("===========For each loop=====");
myfriends.forEach(function(elements,index,array){
 console.log(elements +" index no is "+ index+" and array is "+array);
 
 
});




