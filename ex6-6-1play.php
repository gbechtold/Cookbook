<?php


function selectsetting() {
	$setting = explode ("\n",file_get_contents('scenario.settings.txt'));
	return $setting[mt_rand(0,count($setting)-1)]; 
}
echo selectsetting().'</br>';

function getroll() {
	return mt_rand(1,6);
}





function thename() {
	$firstname = array('Joe','John','Jack','Jonny','Jeff','Jason','Jerry',);
	$secondname = array('Walker','Baker','Flocker','Rocker','Smocker','Clocker','Jones',);

	$selectfirstname = mt_rand(0,6);
	$selectedfirstname = $firstname[$selectfirstname];
	
	$selectsecondname = mt_rand(0,6);
	$selectedsecondname = $secondname[$selectsecondname];
	
	return $selectedfirstname.' '.$selectedsecondname;

}
echo 'Right now '.thename().' rolled the dice and scored '.getroll(). '</br></br>';


?>