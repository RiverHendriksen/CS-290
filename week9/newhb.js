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
  res.render('home');

/*  	var s = document.createTextNode("SUBMIT"); 
	var sub= "submit";

	function letschange(sub){
		console.log("this worked");
		return;
	}

document.getElementById("SUBMIT").addEventListener("click", function(){letschange(sub); }); */
});

app.get('/get',function(req,res,next){
  console.log("got that get");
  /*if(err){
    next(err);
    return;
  }*/
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
