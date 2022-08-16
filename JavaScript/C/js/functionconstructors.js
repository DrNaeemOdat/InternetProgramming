// function test(){
// 	console.log("Hello Computer Engineers!");
// }
// test();

// function test(){
// 	console.log(this);
// 	this.name="Naeem Odat";
// 	console.log(this);
// }

// test();
// console.log(window.name);

//Function constructors
//this will waste the memory. each time a new
//instance is created it will be copied.
// function Circle(radius){
// 	// console.log(this);
// 	this.radius=radius;
// 	this.getArea=function(){
// 		return Math.PI*Math.pow(this.radius,2);
// 	};
// }

// var myCircle = new Circle(10);
// var myOtherCircle = new Circle(20);
// console.log(myCircle);
// console.log(myOtherCircle);
// console.log(myCircle.getArea());
// console.log(myOtherCircle.getArea());


//Better way to save memory is:
// function Circle(radius){
// 	this.radius=radius;
// }
// Circle.prototype.getArea=function(){
// 	return Math.PI*Math.pow(this.radius,2);
// }

// var myCircle = new Circle(10);
// var myOtherCircle = new Circle(20);
// console.log(myCircle);
// console.log(myOtherCircle);
// console.log(myCircle.getArea());

//Immediately Invoked Function Expression

// (function (number) {
//   console.log("In IIFE "+number);
// })();