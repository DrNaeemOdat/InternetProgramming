//String concatination
// var str="Hello";
// // str=str+" World";
// str+=" World";
// console.log(str+"!");

// Regular math operators
// console.log((5+4)/3*6);
// console.log(undefined/3);//NaN
// function test1(a){
// 	console.log(a/6);
// } 
// test1();

//Equality
var x=4,y=4;
// if(x==y)
// 	console.log("x=4 is equal to y=4");

// x='4';
// if(x==4)//type coercion
// 	console.log("x='4' is equal to y=4");

//Strict equality
// if(x===y)
// 	console.log("strict: x='4' is equal to y=4");
// else
// 	console.log("strict: x='4' is not equal to y=4");

// //If statement (all false)
// if(false||null||undefined||""||0||NaN)
// 	console.log("This line won't ever execute");
// else
// 	console.log("All false");

// //If statement (all true)
// if(true&&"hello"&&1&&-1&&"false")
// 	console.log("All true");

//Best practice for {}
//curly braces on the same line or next
//Is it just a style?
// function a()
// {
// 	return
// 	{
// 		name:"Naeem"
// 	};

//  }

// function b(){
// 	return{
// 		name:"Naeem"
// 	};
// }

// // console.log(a());
// console.log(b());

//For loop
var sum=0;
var i=0;
for(var i=0;i<10;i++){
	var x=7;
	sum+=i;
}
i=0;
console.log(i);
console.log("Sum of 0 through 9 is: "+sum);
while(i<7){
	console.log(i++);
}