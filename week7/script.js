   //This is where we create the table 

   /*function buildTable(data) {
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
    var TABLE = [
        {"header 1": "1,1", "header 2": "2,1", "header 3": "3,1", "header 4": "4,1"},
        {"header 1": "1,2", "header 2": "2,2", "header 3": "3,2", "header 4": "4,2"},
        {"header 1": "1,3", "header 2": "2,3", "header 3": "3,3", "header 4": "4,3"},
        {"header 1": "1,4", "header 2": "2,4", "header 3": "3,4", "header 4": "4,4"}
 
    ];
    
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//This is where we edit the table

    document.body.appendChild(buildTabl9e(TABLE));*/
    var divs = document.getElementsByTagName('table');
    var location  = divs[0].rows[1].cells[0]; 
    var x = document.getElementsByTagName("tr");
    var y = document.getElementsByTagName("td");
    var xi = 1;
    var yi = 0;
    var u = document.createTextNode("UP");
    var u2 = "UP";
    var d = document.createTextNode("DOWN"); 
    var d2 = "DOWN";
    var l = document.createTextNode("LEFT");
    var l2 = "LEFT";
    var r = document.createTextNode("RIGHT");
    var r2 = "RIGHT"
    var m = document.createTextNode("MARK CELL");
    var m2 = "MARK CELL";
    
    function line(location){
        location.style.border = "thick solid #0000FF";
    }
    function remove_line(location){
        location.style.border = "";
    }
    
    function markcell(){
       location.style.backgroundColor = 'yellow';
    }
        
    function button_click(name){
          if(name == "RIGHT"){
              if(location == divs[0].rows[1].cells[3] ||location == divs[0].rows[2].cells[3] ||location == divs[0].rows[3].cells[3] ||location == divs[0].rows[4].cells[3]){
                  return;
              }
              else{
            		remove_line(location);
                yi += 1; 
                location = location.nextElementSibling; 
           			line(location); 
              }
          }

        if(name == "LEFT"){
              if(location == divs[0].rows[1].cells[0] ||location == divs[0].rows[2].cells[0] ||location == divs[0].rows[3].cells[0] ||location == divs[0].rows[4].cells[0]){
                  return;
              }
              else{
              	yi = yi -1; 
            		remove_line(location);
                location = location.previousElementSibling; 
           			line(location); 
              }
          }

         if(name == "UP"){
              if(location == divs[0].rows[1].cells[0] ||location == divs[0].rows[1].cells[2] ||location == divs[0].rows[1].cells[1] ||location == divs[0].rows[1].cells[3]){
                  return;
              }
              else{
            		remove_line(location);
                xi = xi -1
                location = divs[0].rows[x[xi].rowIndex].cells[y[yi].cellIndex];
                
           			line(location); 
              }
          }

          if(name == "DOWN"){
              if(location == divs[0].rows[4].cells[0] ||location == divs[0].rows[4].cells[2] ||location == divs[0].rows[4].cells[1] ||location == divs[0].rows[4].cells[3]){
                  return;
              }
              else{
            		remove_line(location);
                xi+=1
                location = divs[0].rows[x[xi].rowIndex].cells[y[yi].cellIndex]; 
                
           			line(location); 
              }
          }
      
      }
            
  	function button(t,x){
        var btn = document.createElement("BUTTON");
    	btn.setAttribute("id", x);
        btn.appendChild(t);                                
        document.body.appendChild(btn); 
    }
    
    button(u,u2);
    button(d,d2);
    button(l,l2);
    button(r,r2);
    button(m,m2);
    
    line(location);
     
      
    document.getElementById("DOWN").addEventListener("click", function(){button_click(d2); });
    document.getElementById("UP").addEventListener("click", function(){button_click(u2); });
 	document.getElementById("RIGHT").addEventListener("click", function(){button_click(r2); });
    document.getElementById("LEFT").addEventListener("click", function(){button_click(l2); });
    document.getElementById("MARK CELL").addEventListener("click", function(){ markcell(); });
   
