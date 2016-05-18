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
    req.open('GET', 'http://pokeapi.co/api/v2/pokemon/altaria/', true);
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
      <h1> Creating a request through AJAX </h1>
      <p> Now comes the arguably hardest part of this guide, getting AJAX to run on your webpage. The first and clearest step is to make sure that you save your file as a ".js" so that way you are actually using javascript (I will go into how to get you js script in your html file later). The first line of code you will want to write is this: <p></br>
      <img src="xml.png"></br></br>
      <p> By setting this variable "req" to "new XMLHttpRequest" we are saying that we are wanting to great a new request, however we have not described how we are going to do that and where we are going to get the data from, with javascript the initial url before the seach must be hard coded. To show you what I mean, I'll show you the request I did on the home page to get the information about Ivysaur: <p></br>
      <img src="get.png" ></br></br>
      <p> There are two lines here to understand, which can be confusing. The first is "req.open" that opens a new connection to the server that you put as the url. The "GET" command means that you are looking to recieve data from the server/website, if you were to use the other option, "POST," then we would usally be trying to send data to the server, which with this api we aren't doing. The second part of this line arguement is, "http://pokeapi.co/api/v2/pokemon/2/," this is where we want to create the request for what information we want from the server. The first part of the url, "http://pokeapi.co/api/v2/" defines where are requesting information from (e.g. pokeapi version 2), the second part, "pokemon/2/," defines what information we want from that server. There are multiple different ways to search for information on the api itself, they have fantastic documentation <a href="http://pokeapi.co/docsv2/">here </a> for what type of searches you can conduct on their website via get. However it sure seems ineffiecient to always hardcode your information right? What if you wanted to let people search for pokemon as well as show your own, so that way you can compare them and show that yours is better? Well you can make it dynamic and we will get to that in a bit. </br> 
      The second line of this code is setting the request header, or the type of information and rules you want when sending the data. This is not always necessary, but since I knew that the data we would recieve was json I decided to show how it was done. 

    </br></br>
    <p> At this point you should see how to create and request information from the Pokéapi, however there is still much more to do to get it into a list format and also to not make the information static (I will explain later)
    </div>

    <div class="container">
      <a href="json.php"><button type="button" class="btn btn-primary">Getting informationfrom the json</button></a>
    </div>

    <div class="container"  id = "foot"></div>
</body>
</html>