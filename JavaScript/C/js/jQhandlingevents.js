$("button").click(function sayHello(){
  $(this).text("Said it!");
  var name=$("#name").val();
  $("#content").html("<h1>Hello " + name + "!</h1>");
	if(name==="student"){
    var title = $("#title").text()+" & Lovin' it!";
		$("#title").text(title);
	}
});

