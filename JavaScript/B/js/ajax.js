//Event handling
document.addEventListener("DOMContentLoaded", function(event){
	document.querySelector("button").addEventListener("click", function(){
		//Call server to get the name
		var xttp=new XMLHttpRequest();
		xttp.onreadystatechange=function(){
			if((this.readyState==4)&&(this.status==200)){
				var name=this.responseText;
				document.querySelector("#content").innerHTML="<h2>Hello "+name+"!</h2>";
			}
		};
		xttp.open("GET", "/data/name.txt", true);
		xttp.send(null);//for POST only
	});
});