<?php ?>
<HTML>
<head>
<title>Working Segment Tracking </title>
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<div>
	<div id="panel1">Panel 1</div>
	<div id="panel2">Panel 2</div>
</div>


<script>
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+'='+cvalue+'; '+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var vuserid=getCookie("cuserid");
    if (vuserid != "") {
        // alert("Welcome again " + vuserid);
        return vuserid;
    } else {
       vuserid = Math.random().toString(36).substring(7);
       if (vuserid != "" && vuserid != null) {
           setCookie("cuserid", vuserid, 30);
           return vuserid;
       }
    }
}

//  SEND Var vuserid to userid 

</script>




<script>

	// define username
	var username = 'Jack Bolter';
	var useremail = 'Jack@osker.com';
	var usermessage = 'Mein Text ' + Date.now();
	var usermessagetitle = 'Mein Text Title';
	var userid = checkCookie();
	// var userid = Math.random().toString(36).substring(7);
	
	document.write(	'<p>username: ' + username + 
					'<br>email: ' + useremail + 
					'<br>userid: ' + userid +
					'<br>usermessage title: ' + usermessagetitle +  
					'<br>usermessage: ' + usermessage + 
					'</p>');
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
  		title: usermessagetitle,
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