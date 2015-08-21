/* A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,

a2 + b2 = c2
For example, 32 + 42 = 9 + 16 = 25 = 52.

There exists exactly one Pythagorean triplet for which a + b + c = 1000.
Find the product abc. */


var i = 3 
var j = 4
var k = 1000

for (i=0;i<1000;i++) {
	for (j=0;j<1000;j++) {
		if (i*i + j*j == k*k) {print("Die Lösung ist " + i + " " + j)}
	}
}

