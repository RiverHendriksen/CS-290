output1();

function output1(){
	console.log("i sure hope this works, also this is the first part") 
}

//output: i sure hope this works, also this is the first part
output2();

var output2 = function (){
	console.log("i sure hope this doesnt work, also this is the second part")
}

//output: TypeError: output2 is not a function