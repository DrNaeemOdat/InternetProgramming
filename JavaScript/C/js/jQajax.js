//Event handling
$(function(){
  $("button").click(function(){
    $("#content").load("data/name.txt");
  })
});

// $(function(){
//   $("button").click(function(){
//     $.get("/data/name.txt", function (data, status) {
//       if (status == "success") {
//         $("#content").html("<h2>Hello " + data+"</h2>");
//       }
//     });
//   });
// });
