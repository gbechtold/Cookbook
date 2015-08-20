/* By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

What is the 10 001st prime number?

5/1=true
5/2=false


*/

// EUL 6

var IterationCounter;
var IterationMax=10000; // Iterations -1
var Counter=1;
var PrimeCounter=1;

function IsPrime(int) {

for(i=2;i<int;i++) {
var rest;
var result;
rest = int%i;

//No Prime
//print(rest);
if((rest==0)) {//print('0R');
result=false;
break;}

//Prime
if((rest>0&&i==int-1)) {//print('Prime');
result=true;
break;}
}
return result;
}

//6th prime is 13 
print(IsPrime(4));
print(IsPrime(5));

do {
Counter++;
 // print(Counter);
if(IsPrime(Counter)==true){PrimeCounter++}
 // print('PrimeIterations:'+PrimeCounter);
} while (PrimeCounter<=IterationMax)

// Result
print("PrimeCounter: "+PrimeCounter);
print("Number: "+Counter);