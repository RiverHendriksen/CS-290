<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="color.css">
  <script>
    var req = new XMLHttpRequest();
    req.open('GET', 'http://pokeapi.co/api/v2/pokemon/squirtle/', true);
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
    } 
    else {
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
      <h1> Getting the juicy bits from json </h1><hr></br> 
      <p> We are sure moving fast here! The next step is getting that sweet sweet json information into a usable format that is readable for everyone. The best (and only way I know how to) is this: 
      </p> </br>
      <img src="format.png" height="300" width="1200"></br></br>
      <p> Let's dissect this code to understand what it does, because it's kind of confusing. The top line, "req.addeventlistener," basically is saying that we are waiting for event "load" and when that happens we will execute the function. These calls are all built into AJAX and javascript there are plenty more that you can also explore to get different information. Req.status basically asks for the code that it recieves back (e.g. 404 or 200, etc.) and if it is too high or low it will fail the program, this is helpful for if the server doesn't respond. The next line will log the json file you recieved onto the console on your browser (right-click on the webpage and press inspect), the one for Ivysaur will look like this: </p> </br>

      <img src="ivylook.png" height="300" width="1200"></br>
    </br>

      <p> This is really helpful for you because we can now see that the json file is categorized to make it easier to parse the information. However this information isn't really helpful to anyone but yourself as it is only visible in the console and you want your friends to see the real deal stuff so you can compare. This is done through setting the variable (response in the image above) to the parsed json file so that way you can easily get the information you want. The next couple of lines labeled, "getElementById" are part of DOM, which is part of Javascript, you don't need to worry about that much about how it works directly because you probably are only going to use it to put information in your html. Which brings about the good point that "getElementById" searches the html that it is in to see if that id name exists and if it does it will then change it. I prefer to put my script in the header of the html document as to skip issues of improper loading. Remember that example I showed on the home page? Well here is the html for it: </p> </br> 

      <img src="pokehtml.png"></br></br>

      <p> As you can see I referenced those id names in my javascript so it changed it in the html to fit. Notice when doing an image you need to reference ".src" instead of text content, this will change the src in the html img tag. Please know there are a ton of ways to reference documents in your html, <a href="http://www.w3schools.com/jsref/dom_obj_document.asp">here is a link</a> to w3schools which can explain more. </br>
      </br>
      In the next page we will start to stray away from the code I showed in the first page to create a search for different pokemon based on name!
      <p>
    </div>

        <div class="container">
      <a href="searchharder.php"><button type="button" class="btn btn-primary">Creating a Pokétastic search</button></a>
    </div>

    <div class="container"  id = "foot"></div>
  </body>
</html>


