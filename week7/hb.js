var express = require('express');

var app = express();
var handlebars = require('express-handlebars').create({defaultLayout:'main'});
var bodyParser = require('body-parser');
var context = {}
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

app.engine('handlebars', handlebars.engine);
app.set('view engine', 'handlebars');
app.set('port', 3050);

app.get('/',function(req,res){
  res.render('home') 
});

function data(x, req){
 var different_route_array = []; 
 context = {};
 if(x == "query"){
    for (var p in req.query){
    	different_route_array.push({'name':p,'value':req.query[p]})
    	console.log(req.query[p]);
  	}
    context.type = "GET";
 }
  if(x == "body"){
    for (var p in req.body){
        different_route_array.push({'name':p,'value':req.body[p]})
        console.log(req.body[p]);
        }
    for (var p in req.query){
        different_route_array.push({'name':p,'value':req.query[p]})
        console.log(req.query[p]);
        }
    context.type = "POST";
 }
  console.log(different_route_array);
  
  //create a data list that is of the array
  context.dataList = different_route_array;
}

app.get('/',function(req,res){
  res.render('home') 
});

app.get('/postreq',function(req,res){
  //create an array
  data( "query", req);
  //iterate through the for loop and push to vals to the array at a single index
  /*for (var p in req.query){
    qParams.push({'name':p,'value':req.query[p]})
  }
  var context = {};
  context.dataList = qParams;*/
  res.render('postreq', context);
});

app.post('/postreq', function(req,res){
  data("body",req);
  /*var qParams = [];
  for (var p in req.body){
    qParams.push({'name':p,'value':req.body[p]})
  }
  console.log(qParams);
  console.log(req.body);
  var context = {};
  context.dataList = qParams;
  context.type = "POST";*/
  res.render('postreq', context);
});


app.use(function(req,res){
  res.status(404);
  res.render('404');
});

app.use(function(err, req, res, next){
  console.error(err.stack);
  res.type('plain/text');
  res.status(500);
  res.render('500');
});

app.listen(app.get('port'), function(){
  console.log('Express started on http://localhost:' + app.get('port') + '; press Ctrl-C to terminate.');
});
