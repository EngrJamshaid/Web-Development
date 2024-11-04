// JavaScript is a programing langauge that is use for create a front end also backend of a websites
// i install node js due to this reason javaScript directly run in terminal of vsCode.
// how to print hello world in javaScript
// JavaScript is one of the 3 languages all web developers must learn:

//    1. HTML to define the content of web pages

//    2. CSS to specify the layout of web pages

//    3. JavaScript to program the behavior of web pages

// This below topics is about JavaScript, and how JavaScript works with HTML and CSS.
console.log("Hello World!");
console.log("=====================================");

// how to add,subtract,multiply and divide the two numbers using javaScript
let a=56;
let b=12;

let result=a+b;
console.log(result);
console.log(a-b);
console.log(a*b);
console.log(a/b);

// The comment is written like this in javaScript the compiler can ignore the comment 
// JavaScript Data Types
// JavaScript variables can hold many data types: numbers, strings, arrays, objects and more:

var first=12; //integer datatype
var second=34.6; //float datatype javaScript automatically pick the datatype
var name="jamshiad";  //string datatype
var cantrue=true;  //boolen datatype in javaScript
var cars = ["Saab", "Volvo", "BMW"];           // Array
var x = {firstName:"Jamshaid", lastName:"Dasti"};    // Object\
console.log(typeof(name));  //we can check the datatype by this way in javaScript

// operators can play an important role in programing langauge there are different operators in javaScript assignment operator logical operator , arithmetic operator etc.
// logical operators in javaScript
// ==	equal to
// ===	equal value and equal type
// !=	not equal
// !==	not equal value or not equal type
// >	greater than
// <	less than
// >=	greater than or equal to
// <=	less than or equal to
// ?	ternary operator

let firstnumber=2;
let secondnumber=5;
console.log(a==b);
// the difference between == and === is that the == can check the left side value is equal to right sid value or not while === check left side value equal to right side also check the datatype of left side value is equal to right side value.
console.log(a===b);
console.log(a!=b);
console.log(a<b);
console.log(a>b);
console.log(a>=b);
console.log(a<=b);



// conditional statment in jS are if, if-else, if-else-if and swithch
var j=6;
if(j<=4)
{
    console.log("j is less than 6");
    
}

if(j>3)
{
    console.log("j is grater than 3");
    
}else{
    console.log("j is less than 3");
    
}

// switch (key) {
//     case value:
        
//         break;

//     default:
//         break;
// }


// JavaScript Function
// A JavaScript function is a block of code designed to perform a particular task.

// A JavaScript function is executed when "something" invokes it (calls it).

function sum()
{
    var a=4;
    var b=6;
    console.log(a+b);
    
}
sum();

// other topics we will coverd in next with javScript DOM






