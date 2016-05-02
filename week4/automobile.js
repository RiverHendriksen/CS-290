function Automobile( year, make, model, type ){
    this.year = year; //integer (ex. 2001, 1995)
    this.make = make; //string (ex. Honda, Ford)
    this.model = model; //string (ex. Accord, Focus)
    this.type = type; //string (ex. Pickup, SUV)

    //boo is a bool I couldn't remember if bool was a type in JS lol
    this.logME = function(boo){
        if(1){
            return console.log(year, make, model, type);
        }
        else{
            return console.log(year, make, model);
        }
    last
    }

}

var automobiles = [ 
    new Automobile(1995, "honda", "Accord", "Sedan"),
    new Automobile(1990, "ford", "F-150", "Pickup"),
    new Automobile(2000, "GMC", "Tahoe", "SUV"),
    new Automobile(2010, "Toyota", "Tacoma", "Pickup"),
    new Automobile(2005, "Lotus", "Elise", "Roadster"),
    new Automobile(2008, "Subaru", "Outback", "Wagon")
    ];

/*This function sorts arrays using an arbitrary comparator. You pass it a comparator and an array of objects appropriate for that comparator and it will return a new array which is sorted with the largest object in index 0 and the smallest in the last index*/
function sortArr( comparator, array ){
    var sorted = [].concat(array);

    var smallest; var temp;

    //enter the for loops, the outter one iterates through the sorted arrray (which is at this point unsorted, and just a copy of the original array), minus the last value 
    //it sets a value i which will be the minimum value 
    for(var i = 0; i < sorted.length-1; i++){
            smallest = i;
            //iterates through array from i+1 to the end of the array, and switches the value of smallest if there is any change
            for(var j = i+1; j < sorted.length; j++){
                var comp = comparator(sorted[j], sorted[smallest]);
                //if true set smallest to j 
                if(comp){
                        smallest = j;
                    }
            }
            //basically if the min changed from i, all the if statement does is switch the variables around if it was proven that the comparator outputed a true 
            if(smallest != i){
                    temp = sorted[i];
                    sorted[i] = sorted[smallest];
                    sorted[smallest] = temp;
            }
    }
    return sorted;
}

/*For all comparators if cars are 'tied' according to the comparison rules then the order of those 'tied' cars is not specified and either can come first*/

/*This compares two automobiles based on their year. Newer cars are "greater" than older cars.*/
function yearComparator( auto1, auto2){

    if (auto1.year > auto2.year){
        return true;
    } else {
        return false;
    }
}

/*This compares two automobiles based on their make. It should be case insensitive and makes which are alphabetically earlier in the alphabet are "greater" than ones that come later.*/
function makeComparator( auto1, auto2){

    //you could have this in the if, but I felt like this was easier to see and also error check
    auto1.make = auto1.make.toUpperCase();
    auto2.make = auto2.make.toUpperCase();


    if (auto1.make < auto2.make){
        return true;
    } else {
        return false;
    }
}

/*This compares two automobiles based on their type. The ordering from "greatest" to "least" is as follows: roadster, pickup, suv, wagon, (types not otherwise listed). It should be case insensitive. If two cars are of equal type then the newest one by model year should be considered "greater".*/
function typeComparator( auto1, auto2){

    //console.log(typeof auto1.type);
    //console.log(typeof auto2.type);
    //onsole.log(auto1.type);
    //console.log(auto2.type);
    //console.log(auto1.year);
    //console.log(auto2.year);

    auto1.type = auto1.type.toLowerCase();
    //console.log(auto1.type);
    auto2.type = auto2.type.toLowerCase();
    //console.log(auto1.type);

    if(auto1.type == auto2.type){
        return yearComparator(auto1, auto2);
    }else if(auto1.type == 'roadster' && auto2.type  != 'roadster'){
        return true;
    }else if(auto1.type == 'pickup' && auto2.type  != 'roadster'){
        return true;
    }else if(auto1.type == 'suv' && auto2.type  != 'roadster' && auto2.type  != 'pickup'){
        return true;
    }else if(auto1.type == 'wagon' && auto2.type  != 'suv' && auto2.type  != 'roadster' && auto2.type  != 'pickup'){
        return true;
    }else{
        return false;
    }



}


//I was annoyed because I misread the assignment and was confused, this is legacy code
function annoyed(array,boo){
    for(var i = 1; i < array.length -1; i++){
        console.log(" ");
        console.log("these are the in between cars:"); 
        array[i].logME(boo); 
        
    }

}
/*Your program should output the following to the console.log, including the opening and closing 5 stars. All values in parenthesis should be replaced with appropriate values. Each line is a seperate call to console.log.

Each line representing a car should be produced via a logMe function. This function should be added to the Automobile class and accept a single boolean argument. If the argument is 'true' then it prints "year make model type" with the year, make, model and type being the values appropriate for the automobile. If the argument is 'false' then the type is ommited and just the "year make model" is logged.
*/

//this is my really dumb output code, but hey it works!!
////////////////////////////////////////////////////////////////
console.log("*****");
console.log("The cars sorted by year are:");
var greatestyear = sortArr(yearComparator, automobiles);
console.log("year make model of the 'greatest' car: ")
console.log(" ");
greatestyear[0].logME(0);
console.log(" ");
annoyed(greatestyear, 0);
console.log(" ");
console.log("year make model of the 'least' car: ");
greatestyear[5].logME(0);
console.log(" ");
console.log(" ");


////////////////////////////////////////////////////////////////
console.log("The cars sorted by make are:");
console.log(" ");
var greatestyear = sortArr(makeComparator, automobiles);
console.log("year make model of the 'greatest' car");
greatestyear[0].logME(0);
console.log(" ");
annoyed(greatestyear, 0);
console.log(" ");
console.log("year make model of the 'least' car: ");
greatestyear[5].logME(0);
console.log(" ");
console.log(" ");

////////////////////////////////////////////////////////////////

console.log("The cars sorted by type are:");
console.log(" ");
var greatestyear = sortArr(typeComparator, automobiles);
console.log(" ");
console.log("year make model of the 'greatest' car");
greatestyear[0].logME(1);
console.log(" ");
annoyed(greatestyear, 1);
console.log(" ");
console.log("year make model of the 'least' car: ");
greatestyear[5].logME(1);
console.log(" ");
console.log(" ");








