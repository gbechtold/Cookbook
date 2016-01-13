/* A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,

a2 + b2 = c2
For example, 3^2 + 4^2 = 5^2 
9 + 16 = 25 = 52.

a2 + b2 = c2
a + b + c = 1000

There exists exactly one Pythagorean triplet for which a + b + c = 1000.
Find the product abc. */

var $a = function() {

	var $a = 1;
	var $b = 1;
	var $c = 1;
	var $max = 10;
	var $countmax = 10;





	for ($c; $max > $c; $c++) {
			
		 for ($b; $c > $b; $b++) {	
									
				for ($a; $b > $a; $a++) {
				 
			 	if ($a + $b + $c == $countmax) {print($a + " " + $b + " " + $c + " is the Countmax " + $countmax);}
				
				/*
				if (($a * $a) + ($b * $b) == ($c * $c)) {
				print('Current triplet ' + $a +' '+ $b +' ' + $c);
				print('Product of triplet ' + ($a*$a) +' '+ ($b*$b) +' ' + ($c*$c) + ' = ' + (($a+$a)+($b*$b)+($c*$c)));
				*/
				
				}
			}
		}
		

	/*
	if (($a * $a) + ($b * $b) == ($c * $c)) {
		print('Current triplet ' + $a +' '+ $b +' ' + $c);
		}
	*/	
	}
$a();



