//DOM Manipulation

// console.log(document.getElementById("title").textContent);

// console.log(document instanceof HTMLDocument);

function sayHello(){
	var name=document.getElementById("name").value;
  // console.log(document.getElementById("name").value);
  // console.log(name);
	// document.getElementById("content").textContent="Hello "+name+"!";
	//To add an HTML elemnt along with its content
	//use innerHTML
	

	document.getElementById("content").innerHTML="<h2>Hello "+name+"!</h2>";
	if(name==="student"){
		var title=document.querySelector("#title").textContent;
		title+=" & Lovin' it!";
    document.querySelector("#title").textContent=title;
    // document.querySelector("h1").innerHTML="Hello";
	}
}