/*

The sum of the squares of the first ten natural numbers is,

12 + 22 + ... + 102 = 385
The square of the sum of the first ten natural numbers is,

(1 + 2 + ... + 10)2 = 552 = 3025
Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.

Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.

*/



function Square(number) {
// Calculate Square
	var n;
		n = number * number;
	return n;
}

// sum of the squares
function SumOfSquares(number) {
	var n;
	var square_n;
	var sum = 0;
	n = number;
	
	for (i=0;i<=n;i++) {
		square_n = (Square(i));
		print(square_n);
		sum = sum + square_n;
	}
	return sum;
}

// square of the sum

function SquareOfSum(number) {
	var n;
	var sum = null;
	n = number;
	
	//sum of the number
	for (i=0;i<=n;i++) {
		sum = i + sum;
		print(sum);
	}
	return Square(sum);
}

function calc_diff() {
 var sum = null;
 var a = 100;
 var b = 100;
 sum = (SquareOfSum(a) - SumOfSquares(b))
 print (sum);
}


calc_diff();

// Tools
//
// print (SquareOfSum(10));
// print (SumOfSquares(10));

