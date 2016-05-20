<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>api</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="color.css">
  <script>
    var req = new XMLHttpRequest();
    req.open('GET', 'http://pokeapi.co/api/v2/pokemon/pikachu/', true);
    req.setRequestHeader('Content-type', 'application/json');
    req.addEventListener('load',function(){
    if(req.status >= 200 && req.status < 400){
      var response = JSON.parse(req.responseText);
      console.log(JSON.parse(req.responseText));
      document.getElementById('poke').src = response.sprites.front_default; 
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

  <div class="container">
    <img src="" id= "poke" height="600" width="600" align = "right">
   
    <h1> So what exactly is an API and why would we use it? </h1> 
    <p> This is a great question to ask!!! An API (Application Programming Interface) is a way for servers and computers to communicate with one and other. 
    For the example of what we are using for this guide - if we were using the Pokéapi to grab information without the existence of an API (ironic but let's continue)
    we would have to create code to manually search the webpage for the information we wanted (basically a web crawler). This is extremely inefficient and would cause a lack of a
    standard so everyone would have to create a new web crawler everytime they wanted any information from a website. Luckily there are API's which basically send a message 
    to the website that holds the information and that website sends the information you requested back, usually json (great right? Heck ya it is).</p><hr>

    <h1>How do we use an API? </h1>
    <p>For the sake of this how to guide we will not be using API Keys because they are not required by Pokéapi, however that is not always the case
    (it usually isn't the case). We won't be talking about keys but they are important to know if you want to use different API's, <a href="http://stackoverflow.com/questions/1453073/what-is-an-api-key">this link </a> from stack overflow can 
    help you to understand. We will be using AJAX requests to ask the Pokéapi for data that we want. AJAX is a way to request services from a website using 
    javascript. We wont be getting into the nitty-gritty of how AJAX works but we will be using it. It is also important to note that all data received is in the form of 
    Json. Json is just a way to format data, it is not a language on its own. Here is an example of Json data recieved from Pokéapi: </p></br>
    <img src="poke.png" height="500" width="700" >
  </br></br>
    <p> WOW! That's totally unreadable! And not only because I compressed a 1440p screen shot! that is because when you request a json file you are basically 
      asking for a dump of all that data. But hey that's what this how to guide is for! we are going to take that steaming pile of trash dump and make it into data that you can use!
      so let's get started by making an AJAX request!
    </br>
  </div>

  <div class="container">
      <a href="ajax.php"><button type="button" class="btn btn-primary">On to ajax, the best/ worst part</button></a>
    </div>

    <div class="container"  id = "foot"></div>

</body>
</html>