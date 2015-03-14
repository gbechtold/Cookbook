<?php ?>
<HTML>
<head>
<title>Working Segment Tracking</title>

</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>






<div>
	<div id="panel1">Panel 1</div>
	<div id="panel2">Panel 2</div>
</div>

<script type="text/javascript">
/* Throw some alerts
	var js_name = ['elem1', 'elem2']
	for (var i = 0; i < js_name.length; i++) {
    alert(js_name[i]);
 };
*/
</script>

<script>


	// define username
	var username = 'Jack Bolter';
	var useremail = 'Jack@osker.com';
	var usermessage = 'Mein Text';
	var usermessagetitle = 'Mein Text Title';
	
	// check if userid cookie is empty, 
	document.write ('UseridCookie: ' + getCookie('userid'));
	
	/*
	if (getCookie('userid') === undefined || getCookie('userid') === null) 
		{ 
		document.write ( 'Die aktuelle ID ist ' + userid );
			var userid = Math.random().toString(36).substring(7);
			// cookie with userdata
			document.cookie = 'userid=' + userid + '; expires=Mon, 3 Aug 2020 20:47:11 UTC; path=/';
			document.write ( 'Die aktuelle ID ist ' + userid );
	
		}
	else 
		{var usercookie = getCookie('userid');
		document.write( 'Bestehendes Usercookie ' + usercookie );}
	*/
	
	document.write(	'<p>username: ' + username + 
					'<br>email: ' + useremail + 
					//'<br>userid: ' + userid +
					'<br>usermessage title: ' + usermessagetitle +  
					'<br>usermessage: ' + usermessage + 
					'</p>');
	
	
	// document.write( document.cookie );
	
	function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
	}
	
	
	
	// sets the cookie cookie1
	document.cookie = 'cookie1=test; expires=Fri, 3 Aug 2001 20:47:11 UTC; path=/';

	// sets the cookie cookie2 (cookie1 is *not* overwritten)
	document.cookie = 'cookie2=test; expires=Fri, 3 Aug 2001 20:47:11 UTC; path=/';

	// remove cookie2
	document.cookie = 'cookie2=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/';
	
</script>



<script type="text/javascript">
	// Segment Basic Code, load on Page Ready
  		!function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.0.1";
 		analytics.load("JhEbtZuoGjwvJDuBM4WJa06gpZHRKpvY");
  		analytics.page()
  		}}();
  
	$(function() {
		// alert("Debug: Segment.io Identify and Event!");
		console.log("submitHandler: Segment.io Identify and Event");

		// Segment.io User Identification 
		analytics.identify(userid, {
  		name: username,
 		email: useremail,
		});
		});
			
	$(function() {	
		// Segment.io Message Sending
		// Trigger on sending a Message
		analytics.track('Sent Message', {
  		title: usermessage,
 		subtitle: usermessage,
  		author: username
		});
	});
</script>



<script>
	$(function() {
		/* ga('send', 'event', 'buchung', 'click', 'workshoptyp', 1); */
		$('#panel2').css("color", "red");
		$('#panel1').hide(300).show(1000).delay(1000);
	});
</script>

</body>
</html>