var msg="In global";
console.log("gloabal: message= "+msg);

var a=function(){
	var msg="Inside a";
	console.log("a: message= "+msg);
	function b(){
		console.log("b: message= "+msg);
	}
	b();
};
// function b(){
// 	console.log("b: message= "+msg);
// }

a();