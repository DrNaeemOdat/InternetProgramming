<html>
<head>
  <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
  <script type="text/javascript">
  //
    document.addEventListener("DOMContentLoaded", function(event){
    //  document.querySelector("button").addEventListener("click", function(){
        //Call server to get the name
        var xttp=new XMLHttpRequest();
        xttp.onreadystatechange=function(){
          if((this.readyState==4)&&(this.status==200)){
            var name=this.responseText;
            document.querySelector("#back").innerHTML="<h2>Hello "+name+"!</h2>";
          }
        };
        xttp.open("GET", "json.php", true);
        xttp.send(null);//for POST only
    //  });
    });
  //
  // $(document).ready(function(){
  //   $.getJSON('json.php', function(data){
  //     $("#back").html(data);
  //   })
  // });
  </script>
</head>
<body>
  <p>Lets get some JSON</p>
  <p id="back">Before</p>
  <p>
		<button>
			Get some data from the server!
		</button>
	</p>
  <p><a href="json.php" target="_new">json.php</a></p>
</body>
</html>
