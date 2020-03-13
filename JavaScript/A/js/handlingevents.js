
function sayHello(){
	this.textContent="Said it!";
	var name=document.getElementById("name").value;
	document.getElementById("content").innerHTML="<h1>Hello "+name+"!</h1>";
	if(name==="student"){
		var title=document.querySelector("#title").textContent+" & Lovin' it!";
		document.querySelector("h1").textContent=title;
	}
}






//For the following script should be at the end of the html documnet
document.querySelector("button").addEventListener("click",sayHello);

//Another way
// document.querySelector("button").onclick=sayHello;