/* -*- tab-width: 8; indent-tabs-mode: nil; c-basic-offset: 8 -*-
 *      
 * This Source Code Form is subject to the terms of the StarsMedia Public
 * Repository */


// list of prime factors from 0 - 100

var primenumbers = [];
var isprime;
var checknumber = 600851475143;
var primefactors = [];


function isprime(number) {
		for(j=2;j<number;j++) {			
			// print(j + " " + number%j);
			if (number%j==0) {
				return "no prime";
				}			
		}
		// is prime
		primenumbers.push(i);
	}

for(i=1;i<=10000;i++){	
	isprime(i);	
}

print(primenumbers);

primenumbers.forEach(function(Entry){
	if (checknumber%Entry==0) {
		primefactors.push(Entry);
		print(Entry);
	}
});

