function DivideUp(data){

		var check_rest
		var teiler

		for(i=0;i<22;i++) {
			var rest
			// print(data + " / " + i + " = " + (data/i) + " und " + (data%i) + " rest");
			
			 if (data%i>0) {
			 	return false;
			 		   break;
			 		// Wenn die division mit mehr als 0 rest endet, brich ab
			 }	
			 

			 if (i>19) {
			 	print(i);
			 	print("--- Das Resultat ist " + data + " -- ");  // Wenn die division mit 10 durchläufen erfolgreich ist, gib data aus
				break;
			 }
			 // sonst loope weiter
		
		}

}


function InvoceDivision() {

 for(x=1;x<1000000000;x++) {
	var y;
	y = DivideUp(x);
 
	}
}

InvoceDivision();



// maxdivision(startwert);




