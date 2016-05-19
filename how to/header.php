<head>
	<link rel="stylesheet" href="color.css">
</head>
<div class="container">
</br>
<img src="pik.png" height="200" width="200" align = "left">
 <h1> Welcome back big bro! just so you know we are saving your ip: <?php echo $_SERVER["REMOTE_ADDR"]; ?> </h1>
 <hr>

 <div class="dropdown">  
  <a href="index.php"><button type="button" class="btn btn-primary">Home</button></a>
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sections
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="api.php">api</a></li>
    <li><a href="ajax.php">ajax</a></li>
    <li><a href="json.php">Json</a></li>
    <li><a href="searchharder.php">Creating a search</a></li>
    <li><a href="errors.php">Checking for errors</a></li>

  	</ul>
  <a href="pokesearch.html"><button type="button" class="btn btn-primary">Search that pokemon!</button></a>
      <a href="http://pokeapi.co/docsv2/#info"><button type="button" class="btn btn-success">Pokéapi</button></a>
  <a href="https://github.com/RiverHendriksen/CS-290/tree/master/how%20to"><button type="button" class="btn btn-success">Github</button></a>  
  </div>  
</br>
</div>
