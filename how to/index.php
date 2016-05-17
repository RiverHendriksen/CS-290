<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="color.css">
  <script src="anime.js"></script>
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
      <h1> SO YOU ARE READY TO ENTER THE ANIME WORLD (in your website) </h1>
      <p> So you may be thinking, "I want to have a website that shows my favorite anime, but how do do that?" Well I am here to tell you, it's pretty easy, there is an API for that.
      Now you can share your fave anime with the world, let them know taste is not shit (it might be, but that's ok too). We will be using Hummingbird API which is readily avaliable on github to acess all the anime info via Json data.
    </div>
    <div class = "container">
      <h2>Result</h2>
      <ul>
        <li><span>Pokemon ID:</span><span id="Pokid"></span></li>
        <li><span>Pokemon name:</span><span id="Pname"></span></li>
        <!--<li><span>Temperature:</span><span id="tempbroture"></span></li>-->
      </ul>
    </div>

    <div class="container"  id = "foot"></div>
</body>
</html>