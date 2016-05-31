var express = require('express');
var mysql = require('mysql');
var pool = mysql.createPool({
  host  : 'localhost',
  user  : 'student',
  password: 'default',
  database: 'student'
});

var app = express();
var handlebars = require('express-handlebars').create({defaultLayout:'main'});
var bodyParser = require('body-parser');
var context = {}
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

function buildTable(data) {
  var node = document.createElement("table");
  var tr = document.createElement("tr");
  var headers = Object.keys(data[0]);
  for (var i=0; i<headers.length; ++i) {
    var header = headers[i];
    var ch = document.createElement("th");
    ch.appendChild(document.createTextNode(header));
    tr.appendChild(ch);
    }
  node.appendChild(tr);
  data.forEach(function (rowdata) {
    tr = document.createElement("tr");
    for (var i=0; i<headers.length; ++i) {
      var header = headers[i];
      var cd = document.createElement("td");
      cd.appendChild(document.createTextNode(rowdata[header]));
      tr.appendChild(cd);
    }
    node.appendChild(tr);
  });
  return node;
}

app.engine('handlebars', handlebars.engine);
app.set('view engine', 'handlebars');
app.set('port', 3000);

app.get('/',function(req,res,next){
  var context = {};
  pool.query('SELECT * FROM workouts', function(err, rows, fields){
    if(err){
      next(err);
      return;
    }
    context.results = rows;
    console.log(context.results);
    res.render('home', context);
  });
});

app.get('/delete',function(req,res,next){
  var context = {};
  pool.query('DELETE FROM workouts WHERE id =' + [req.query.id], function(err, rows, fields){
    if(err){
      next(err);
      return;
    }
  });
        pool.query('SELECT * FROM workouts', function(err, rows, fields){
        if(err){
            next(err);
            return;
        }
     res.send(JSON.stringify(rows));
});
});


app.get('/get',function(req,res,next){
	console.log("get got");

   pool.query("INSERT INTO workouts (`name`,`reps`,`weight`,`date`,`lbs` ) VALUES (?,?,?,?,?)",
    [req.query.name, req.query.reps, req.query.weight, req.query.date, req.query.lbs], function(err, value){
        if(err){
            next(err);
            return;
        }
});
	pool.query('SELECT * FROM workouts', function(err, rows, fields){
        if(err){
            next(err);
            return;
        } 
       res.send(JSON.stringify(rows));
});
});
 
app.get('/reset-table',function(req,res,next){
  var context = {};
  pool.query("DROP TABLE IF EXISTS workouts", function(err){ //replace your connection pool with the your variable containing the connection pool
    var createString = "CREATE TABLE workouts("+
    "id INT PRIMARY KEY AUTO_INCREMENT,"+
    "name VARCHAR(255) NOT NULL,"+
    "reps INT,"+
    "weight INT,"+
    "date DATE,"+
    "lbs BOOLEAN)";
    pool.query(createString, function(err){
      context.results = "Table reset";
      res.render('home',context);
    })
  });
});

app.get('/insert',function(req,res,next){
  var context = {};
  pool.query("INSERT INTO workouts (`name`) VALUES (?)","truns", function(err, result){
    if(err){
      next(err);
      return;
    }
    context.results = "Inserted id " + result.insertId;
    res.render('home',context);
  });
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
