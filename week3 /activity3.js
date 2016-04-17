function deepEqual(a,b){

	//the best case where they are exactly equal and so it returns 
	if (a===b){
		return true 
	}

	//checks to see if a or b isnt an object, and checks to see if it is null
	if (typeof a != "object" || typeof b != "object" || a == null || b == null){
		return false; 
	}

	//if both of the if statements are not applicable then check to see each of the properties and compare them until something is found. 
	else {
    for (var item in a) {
		return deepEqual(a[item], b[item]);
    	}
    }
}

//test case 
var obj = {here: {is: "an"}, object: 2};
console.log(deepEqual(obj, obj));
// → true
console.log(deepEqual(obj, {here: 1, object: 2}));
// → false
console.log(deepEqual(obj, {here: {is: "an"}, object: 2}));
// → true

//I wrote this code but also checked online to see if my code made sense and it was almost the exact same as this github: https://gist.github.com/SYFReed/ad936e1f87ad38440bd5
//Please know I was not copying their results, but clearly we think in a similar manner!