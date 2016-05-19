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
    req.open('GET', 'http://pokeapi.co/api/v2/pokemon/totodile/', true);
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

    <h1> You can (not) advance! </h1><hr></br>

    <p> jk. You are ready to roll now, hopefully you have now learned some new tricks to creating your very own website! Again if you are confused about anything/ don't know how I did some of my code please check out the github tab. It will have all the code I have written here to create the website. I also want to again mention that this guide is the very basics for how to get info from this api. there is a lot more that you can do and learn on your own. Good luck on your adventure! </p>

      <img src="congrats.gif" >

        <div class="container"  id = "foot"></div>
      



</body>
</html>


