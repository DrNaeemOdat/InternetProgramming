//Value
// var a=7;
// var b=a;
// console.log("a: "+a);
// console.log("b: "+b);
// b=5;
// console.log("after b update:");
// console.log("a: "+a);
// console.log("b: "+b);

// Reference
// var a={x:7};
// var b=a;
// console.log(a);
// console.log(b);
// b.x=9;
// console.log("after b.x update:");
// console.log(a);
// console.log(b);

// //Pass by reference vs by value
// function changePrimitive(primValue){
// 	console.log("In changePrimitive...");
// 	console.log("before:");
// 	console.log(primValue);
// 	primValue=5;
// 	console.log("after:");
// 	console.log(primValue);
// }

// var value=7;
// changePrimitive(value);
// console.log("after changePrimitive, orignal value");
// console.log(value);

function changeObject(objValue){
	console.log("in changeObject...");
	console.log("before:");
	console.log(objValue);
	objValue.x=6;
	console.log("after:");
	console.log(objValue);
} 
var value={x:5};
changeObject(value);
console.log("after changeObject, orignal value");
console.log(value);