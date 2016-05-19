<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>errors</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="color.css">
  <script>
    var req = new XMLHttpRequest();
    req.open('GET', 'http://pokeapi.co/api/v2/pokemon/mewtwo/', true);
    req.setRequestHeader('Content-type', 'application/json');
    req.addEventListener('load',function(){
    if(req.status >= 200 && req.status < 400){
      var response = JSON.parse(req.responseText);
      console.log(JSON.parse(req.responseText));
      document.getElementById('poke').src = response.sprites.front_default; 
      document.getElementById('poke1').src = response.sprites.front_default; 
      document.getElementById('poke2').src = response.sprites.front_default; 
      document.getElementById('poke3').src = response.sprites.front_default; 
      document.getElementById('poke4').src = response.sprites.front_default; 
    } else {
      console.log("Error in network request: " + request.statusText);
      }});
    req.send(null);
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script>

  $(function(){
    $("#header").load("header.php");
    $("#foot").load("footer.html");
  });
  </script>
</head>
<body>
    <div class = "container" id = "header"></div>
    <div class = "container"> 
      <img src="" id= "poke" height="200" width="200" align = "left"><img src="" id= "poke1" height="200" width="200" align = "left"><img src="" id= "poke2" height="200" width="200" align = "left"><img src="" id= "poke3" height="200" width="200" align = "left"><img src="" id= "poke4" height="200" width="200" align = "left">
    </div>

   <div class = "container">
   	<h1> A quick side bar to errors and telling users your errors</h1><hr></br>

   	<img src="error.png" width = "800" align = "right">
   	<p> As a final side note, it is important to have error checking in your code that can be displayed to the user that isn't just on the console (I think it is 
   		fair to assume that the average user does not know how to use the console, and you shouldn't expect them to). In the previous search code there was no way to 
   		show the user if there is a 404 error if the item doesn't exist. Ajax makes this pretty simple to fix and is actually built in. If you look at the code 
   		all that is needed is to append an else if statement after the "if(req.status >= 200 && req.status < 400)". This is really simple and very helpful
   		for the user as they can now see if they made a mistake rather than it just hanging. Of course the error message I use is rather stressful and I just found it to
   		be funny, I recommend that you use a better error message or alert to tell them that they have failed. 
   	</p>

   	       <a href="wrapping.php"><button type="button" class="btn btn-primary">wrapping it up :-(</button></a>
      </div>

        <div class="container"  id = "foot"></div>
      



</body>
</html>







