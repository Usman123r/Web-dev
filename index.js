console.log('hello words');
//declaring variables 

let firstName;
let secondName = "jane", lastName="line";
let age = 13;
let height = 11.2;
let school = null;
var registered= true;//boolean
console.log(typeof firstName);
const studentAges = [12,13,14,15,16]; 
console.log("age of second lstudent is", studentAges[1]);

let studentDetails={firstName: "jane",age:12, height: 11.1,registered: true,printDetails: function(){console.log("my name is",this.firstName,"iam",this.age,  "am i registered ?", this.registered,"for sure i was. By the way i am",this.height)}};
console.log(studentDetails.height);
studentDetails.printDetails();
//functiona
function myFunction(){
    console.log("this is my function")
}
myFunction();
// FUNCTION WITH PARAMETERS 
function findProduct(number1,number2){
    return number1*number2;
}
let ourProduct = findProduct(7,10);
console.log("our product is", ourProduct);

//for loop

for(let i=0; i<=10; i++){
    console.log("the",i,"number is", i);
}
// conditional statement 
var votingAge = prompt("Please enter your age:");
if (votingAge<18){
    console.log("not qualified");
}
else if(votingAge==18){
    console.log("qualified");
}
else if(votingAge > 18){
    console.log("perfect age");
}
