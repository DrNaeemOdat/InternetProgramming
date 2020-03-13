// function multiply(x=10,y=4){
// 	return x*y;
// }

// // console.log(multiply(6,7));//1
// console.log(multiply(2));//2
// // console.log(multiply);//3
// // console.log(multiply.toString());//4
// // multiply.version="v.1.1.1";//5
// // console.log(multiply.version);//5

//Function factory

function makeMultiplier(multiplier){
	var makeFunc=function(x){
		return multiplier*x;
	};
	return makeFunc;
}

// //var multiplyBy3=makeMultiplier(3)(10);
var multiplyBy3=makeMultiplier(3);

// // console.log(makeMultiplier(3));//print an object
// // console.log(makeMultiplier(3)(10));//=multiplyBy3(10)
// console.log(multiplyBy3(10));
var doubleAll=makeMultiplier(2);
// console.log(doubleAll(30));


//Passing functions as arguments
function doOperationOn(x, operation){
	return operation(x);
}
var res=doOperationOn(5,multiplyBy3);
console.log(res);
res=doOperationOn(100,doubleAll);
console.log(res);




