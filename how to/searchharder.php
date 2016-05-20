<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>search create</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="color.css">
  <script>
    var req = new XMLHttpRequest();
    req.open('GET', 'http://pokeapi.co/api/v2/pokemon/ninetales/', true);
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

    <div class = "container"</div>
      <h1> So you are you ready to make a dynamic search for your fave pokemon??</h1><hr></br>
      <p> Hey me too!! This is pretty exciting and the implementation is fairly easy to start. First you must make a form in your html that a user can submit to enable a search. For this exercise 
        we really only need the pokemons name to look up what the stats are, but if you wanted you could search based on the stats and other features (which are all querys built into the api). 
        While I am just going to show you snippets of code about how to enable a search feature, you can also click on the seach button at the top to see a fully implemented pokemon search. 
        So take a look at the html form:</p></br>

       <img src="form.png" height = "330" width = "562" align = "left"> <p> There are really two parts to this html, the second part we have already done. 
       As a side note the class = "container" part of the div is just referencing bootstrap which is a company that allows you import their CSS for easier styling. If you are 
       interested in how this all works check out the github tab which links to my github that has all the code for all these web pages (self plug-in *wink*). Anyways, the first part of this 
       html is a simple form which is created under a fieldset and then creates a label/input and then pushes that input to a submit. The javascript side (seen below) waits for the submit button to be called, 
       e.g. "document.getElementById('Submit').addEventListener('click', function(event)" and when that button is called it produces an event. It is important to note that bind buttons is wrapped in the first 
       function "document.addEventListener('DOMContentLoaded', bindButtons);" which is also an event listener that waits for the dom content to be loaded onto the page.</p></br>
       <img src = "javapoke.png" align = "right" height = "637" width = "739"></br>
       <p>Poketastic is a simple function (well not simple, but easy for us to understand) that basically does the same thing as javascript we did before, 
        except now it is dynamic and the search is not hard coded into the request. Basically we create a variable that holds the information that was submitted and make sure that it is lower 
        case (that part is really important for error checking), we then simply add it to the get request and the rest is what we have seen before. If you are confused by all the lines that say error, 
        it was just me having fun, it is not necessary but I like to entertain myself when coding. It is good to note that I put all of this script in the head of the html file, 
        this isn't always necessary and you could have just included the code as a source (something along the lines of: "script src = "search.js"), but for the sake of this example and the 
        github pages I left it as it is. </p>

       <a href="errors.php"><button type="button" class="btn btn-primary">A quick side bar on errors</button></a>
      </div>

        <div class="container"  id = "foot"></div>
      



</body>
</html>