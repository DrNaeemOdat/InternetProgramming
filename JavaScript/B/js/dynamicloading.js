document.addEventListener("DOMContentLoaded", function(event){
	document.querySelector(".item").addEventListener("click", function(){
    //Call server to get the entriy and the items
    var item=null;
		var xttp=new XMLHttpRequest();
		xttp.onreadystatechange=function(){
			if((this.readyState==4)&&(this.status==200)){
        item = this.responseText;
        var xttp=new XMLHttpRequest();
		    xttp.onreadystatechange=function(){
			    if((this.readyState==4)&&(this.status==200)){
            var entry= JSON.parse(this.responseText);
            item = item.replace(new RegExp("{{name}}", "g"), entry.name);
            item = item.replace(new RegExp("{{description}}", "g"), entry.description);
                   
            document.querySelector("#content").innerHTML=document.querySelector("#content").innerHTML+item;				   
			    }
		    };
        xttp.open("GET", "data/item.json", true);
		    xttp.send(null);//for POST only
			}
		};
		xttp.open("GET", "templates/item.html", true);
    xttp.send(null);//for POST only
  });
  
});

function loadItem(){
  //Call server to get the entriy and the items
  var item=null;
  var xttp=new XMLHttpRequest();
  xttp.onreadystatechange=function(){
    if((this.readyState==4)&&(this.status==200)){
      item = this.responseText;
      var xttp=new XMLHttpRequest();
      xttp.onreadystatechange=function(){
        if((this.readyState==4)&&(this.status==200)){
          var entry= JSON.parse(this.responseText);
          item = item.replace(new RegExp("{{name}}", "g"), entry.name);
          item = item.replace(new RegExp("{{description}}", "g"), entry.description);
                 
          document.querySelector("#content").innerHTML=document.querySelector("#content").innerHTML+item;				   
        }
      };
      xttp.open("GET", "data/item.json", true);
      xttp.send(null);//for POST only
    }
  };
  xttp.open("GET", "templates/item.html", true);
  xttp.send(null);//for POST only
}
