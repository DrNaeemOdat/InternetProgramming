// document.addEventListener("DOMContentLoaded",
// 	function(event){
//     // document.querySelector("button").onclick = sayHello;
//     document.querySelector("button").addEventListener('click',sayHello);
// 		function sayHello(e){
// 			console.log(e);
// 			this.textContent="Said it!";
// 			var name=document.getElementById("name").value;
// 			document.getElementById("content").innerHTML="<h1>Hello "+name+"!</h1>";
// 			if(name==="student"){
// 				var title=document.querySelector("#title").textContent+" & Lovin' it!";
// 				document.querySelector("h1").textContent=title;
// 			}
// 		}
// 	}
// );

		
document.addEventListener("DOMContentLoaded",
	function(e){
		// document.querySelector("body").addEventListener('mousemove',
		document.addEventListener("mousemove",
			function(e){
				//console.log("Event inside is "+e);
				if(e.shiftKey===true){
					console.log("X is: "+e.clientX);
					console.log("Y is: "+e.clientY);
				}
			}
		);
	}
);