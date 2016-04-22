//Part 1
function forE(a, work) {
       for (var i = 0; i < a.length; i++) {
	          work(a[i]);
		      }
}

var arr = [1, 2, 3];
var total = 0;
function add(val) {
       total += val; 
}
//either method works, I'm going to just leave both
//forE(arr,add);
arr.forEach(add);

console.log(total);

//Part 2
function dialog(person){    
    return  function(speech) {
        return person + " says \"" + speech + "\"";;
    };
}

var speaker = "Don Draper";
draper = dialog(speaker);
console.log(draper("smoking and adverts"));

