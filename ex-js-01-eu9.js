/* A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,

a2 + b2 = c2
For example, 3^2 + 4^2 = 5^2
9 + 16 = 25 = 52.

a2 + b2 = c2
a + b + c = 1000

There exists exactly one Pythagorean triplet for which a + b + c = 1000.
Find the product abc. */

/*

n + n+1 = n+2
1 + 2 = 3 = true && 1^1 + 2^2 = 3^3
-> 1^1 + 2^2 = 3^3 -> sum = 1000
 */

var $n = 1;

while($n<1000) {


		$n + ($n+1) == $n+2;
		print($n);

		/*print($n +" + "+ ($n+1) + ($n + $n+2)) +' = '+ ($n+2));*/


		while(squarerootequation($n)){

			 while(SquareRootEquationsum($n, 1000)){
			print(sqr($n) +" + "+ sqr(($n+1)) +" = "+ sqr(($n+2)));
			print('innersqr');
			}
			print('loop2');
		}

		$n++;

}


function sqr(x) {
	return x*x;
}

function squarerootequation($n) {
		if(sqr($n) + sqr($n+1) == sqr($n+2)) {
			print(sqr($n) +" + "+ sqr(($n+1)) +" = "+ sqr(($n+2)))
		}
		else {
			return false;
			}
}

function SquareRootEquationsum($n,$m) {
		sqr($n) + sqr($n+1) + sqr($n+2) == $m;
		return true;
}

print('hello world');
