function Automobile( year, make, model, type ){
    this.year = year; //integer (ex. 2001, 1995)
    this.make = make; //string (ex. Honda, Ford)
    this.model = model; //string (ex. Accord, Focus)
    this.type = type; //string (ex. Pickup, SUV)

    //boo is a bool I couldn't remember if bool was a type in JS lol
    this.logME = function(boo){
        if(boo){
            return console.log(year, this.make, this.model, this.type);

        }
        else if{
            return console.log("abba");
        }
    
    }
    //this.logME();

}

var automobiles = [ 
    new Automobile(1995, "honda", "Accord", "Sedan"),
    new Automobile(1990, "ford", "F-150", "Pickup"),
    new Automobile(2000, "GMC", "Tahoe", "SUV"),
    new Automobile(2010, "Toyota", "Tacoma", "Pickup"),
    new Automobile(2005, "Lotus", "Elise", "Roadster"),
    new Automobile(2008, "Subaru", "Outback", "Wagon")
    ];

//prints original 
//console.log(automobiles)

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

/*A comparator takes two arguments and uses some algorithm to compare them. If the first argument is larger or greater than the 2nd it returns true, otherwise it returns false. Here is an example that works on integers*/
function exComparator( int1, int2){
    if (int1 > int2){
        return true;
    } else {
        return false;
    }
}

/*For all comparators if cars are 'tied' according to the comparison rules then the order of those 'tied' cars is not specified and either can come first*/

/*This compares two automobiles based on their year. Newer cars are "greater" than older cars.*/
function yearComparator( auto1, auto2){
    //console.log(typeof auto1.year);
    //console.log(typeof auto2.year);
    //console.log(auto1.year);
    //console.log(auto2.year);

    if (auto1.year > auto2.year){
        return true;
    } else {
        return false;
    }
}

/*This compares two automobiles based on their make. It should be case insensitive and makes which are alphabetically earlier in the alphabet are "greater" than ones that come later.*/
function makeComparator( auto1, auto2){
    //console.log(typeof auto1.make);
    //console.log(typeof auto2.make);
    //console.log(auto1.make);
    //console.log(auto2.make);
    //you could have this in the if, but I felt like this was easier to see and also error check
    auto1.make = auto1.make.toUpperCase();
    //console.log(auto1.make);
    auto2.make = auto2.make.toUpperCase();
    //console.log(auto2.make);

    if (auto1.make > auto2.make){
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

    auto1.type = auto1.type.toUpperCase();
    //console.log(auto1.type);
    auto2.type = auto2.type.toUpperCase();
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

function annoyed(array){
    for(var i = 0; i < array.length; i++){
        array.LogME[i]; 
    }

}
/*Your program should output the following to the console.log, including the opening and closing 5 stars. All values in parenthesis should be replaced with appropriate values. Each line is a seperate call to console.log.

Each line representing a car should be produced via a logMe function. This function should be added to the Automobile class and accept a single boolean argument. If the argument is 'true' then it prints "year make model type" with the year, make, model and type being the values appropriate for the automobile. If the argument is 'false' then the type is ommited and just the "year make model" is logged.
*/



console.log("*****");
console.log("The cars sorted by year are:");

var greatestyear = sortArr(yearComparator, automobiles);
greatestyear[0].logME;
//annoyed(greatestyear);

/*(year make model of the 'greatest' car)
(...)
(year make model of the 'least' car)

The cars sorted by make are:
(year make model of the 'greatest' car)
(...)
(year make model of the 'least' car)

The cars sorted by type are:
(year make model type of the 'greatest' car)
(...)
(year make model type of the 'least' car)
*****

As an example of the content in the parenthesis:
1990 Ford F-150 */

//console.log(yearComparator(automobiles[0],automobiles[1]));
//console.log(makeComparator(automobiles[0],automobiles[1]));
//console.log(typeComparator(automobiles[1],automobiles[3]));






