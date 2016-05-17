//console.log(dawg);
var req = new XMLHttpRequest();
//var payload = {dawg:null};
//payload.xd = document.getElementById(specificdog).value;
//console.log(payload.xd)
req.open('GET', 'http://hummingbird.me/api/v1/search/anime?query=["persona"]', true);
req.addEventListener('load',function(){
if(req.status >= 200 && req.status < 400){
     console.log(JSON.parse(req.responseText));
     var response = JSON.parse(req.responseText);
     document.getElementById('Ucity').textContent = response.slug;
     document.getElementById('humidity').textContent = response.synposis;
     document.getElementById('tempbroture').textContent = response.episode_length;
} else {
     console.log("Error in network request: " + request.statusText);
     }});
    req.send(null);
    event.preventDefault();