// $(function () {
//   $("button").click(function () {
//     $(this).text("Said it!");
//     var name = $("#name").val();
//     $("#content").html("<h1>Hello " + name + "!</h1>");
//     if (name === "student") {
//       var title = $("#title").text() + " & Lovin' it!";
//       $("#title").text(title);
//     }
//   })
// });

		
$(function(e){
		$(document).mousemove(
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