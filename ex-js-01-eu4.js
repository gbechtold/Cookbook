var checkpalindrome
var checkproduct
var palindromelist = [];

//is palindrome
function checkpalindrome(data){
	var i=0;
	var strdata = data.toString();
	var a_palin = [];
	var rev_palin = [];
	
	// print(strdata);
	
	for(i; i<strdata.length; i++){
		a_palin.push(strdata.substr(i,1));
		}

	// print(a_palin);

	rev_palin = a_palin.slice(0); 
	rev_palin.reverse();

	/*for(i=0;i<a_palin.length;i++){
	print(i);
	}
	print(a_palin);
	print(a_palin);
	print(rev_palin);
	print(JSON.stringify(a_palin) + "" + JSON.stringify(rev_palin));		*/


	 if (JSON.stringify(a_palin) === JSON.stringify(rev_palin)) { 
	 	return true;
	 	}
	 else { 
	 	return false;
	 	};

}




function largestproduct() {
	var aresult = [];
	for(i=arguments[0];i>0;i--){

				for(j=arguments[1];j>0;j--){
				
				k = i * j;
				//print(k);
					if (checkpalindrome(k) == true) {
						palindromelist.push(k);
					}
				
			//aresult.push(j);	
		}
		//aresult.push("outer" + i);	
	}
	//print(aresult);
	palindromelist.sort(function(a, b) {return a-b});
} 	


largestproduct(999,999);
// print(checkpalindrome(50));

//var y = (checkpalindrome("asa") == true ? palindromelist.push('asa') : "" );
print("die aktuelle liste: " + palindromelist);


