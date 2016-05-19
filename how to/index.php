<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>pokemon world</title>
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
      <h1> SO YOU ARE READY TO ENTER THE POKEMON WORLD (in your website) </h1>
      <p> So you may be thinking, "I want to have a website that shows my favorite pokemon and their stats, but how do do that?" Well I am here to tell you, it's pretty easy, there is an API for that.
      Now you can share your fave pokemon with the world without just sharing with your friends the url (how lame is that), let them know your taste [in pokemon] is cool. We will be using Pokéapi API which is 
      readily avaliable on github (see the link at the top labeled Pokéapi) to acess all the pokemon goodness. </p></br><hr>

      <h5> **PLEASE NOTE, IT MAY TAKE SOME TIME FOR THE EXAMPLE TO DISPLAY (the times to contact pokeapi seem to change randomly)**</h5> <hr></br>

      <h2> What should I expect to be able to do at the end of this how- to guide? </h2>
      <p> Simply put, you will be able to access the json files for all the different type of pokemon that you desire to share. I assume you know a little HTML/CSS and Javascript
      but you don't know anything about json, APIs, or using AJAX (if you know more that is great!).
      I won't be covering formatting such as tables 
      or anything else than lists, while that stuff is cool and helpful for formatting your wide data list of pokemon, it isn't necessarily what I am trying to do today. For an example
      you can expect the data to look something like this: </p> 
    </div>
   
    <div class = "container">
      <h2>Result</h2>
      <ul>
        <li><span>pokemon's id: </span><span id="pokeid"></span></li>
        <li><span>pokemons name: </span><span id="pokname"></span></li>
      </ul>
    </div>

    <div class="container">
      <img src="" id= "poke" height="100" width="100">
    </div>

    <div class="container">
      <a href="api.php"><button type="button" class="btn btn-primary">Let's get started</button></a>
    </div>


    <div class="container"  id = "foot"></div>
    <audio controls autoplay>
  <source src = "whosthatpokemon.wav" type = "audio/wav">
</audio>
</body>
</html>