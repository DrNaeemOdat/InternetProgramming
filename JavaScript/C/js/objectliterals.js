// //Object literals and "this"
// var literalCircle={
// 	radius:10,

// 	getArea:function(){
// 		console.log(this);
// 	}
// };

// literalCircle.getArea();

// var literalCircle={//new Object()
// 	radius:10,

// 	getArea:function(){
// 		console.log(this);
// 		var increaseRadius=function(){
// 			this.radius=20;
// 			console.log("inside increaseRadius: "+this);
// 		};
// 		increaseRadius();
// 		console.log(this.radius);
// 		return Math.PI*Math.pow(this.radius,2);
// 	}
// };

// console.log(literalCircle.getArea());
//window.radius
var literalCircle={//new Object()
	radius:10,

	getArea:function(){
		var self=this;//to solve this inconsistency
		console.log(this);
		var increaseRadius=function(){
			self.radius=20;
		};
		increaseRadius();
		console.log(this.radius);
		return Math.PI*Math.pow(this.radius,2);
	}
};

console.log(literalCircle.getArea());
