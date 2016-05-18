
var req = new XMLHttpRequest();

req.open('GET', 'http://pokeapi.co/api/v2/pokemon/2/', true);
req.setRequestHeader('Content-type', 'application/json');
req.addEventListener('load',function(){
if(req.status >= 200 && req.status < 400){
     console.log(JSON.parse(req.responseText));
     var response = JSON.parse(req.responseText);
     document.getElementById('pokeid').textContent = response.id;
     document.getElementById('pokname').textContent = response.name;
     document.getElementById('poke').src = response.sprites.front_default; 

} else {
     console.log("Error in network request: " + request.statusText);
     }});
    req.send(null);
    event.preventDefault();