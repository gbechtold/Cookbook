
<?php ?>
<HTML>
<head>
<title>Working Segment Tracking and Google Analytics Tracking</title>

</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59582458-2', 'auto');
  ga('send', 'pageview');

</script>


<div>
	<div id="panel1">Panel 1</div>
	<div id="panel2">Panel 2</div>
</div>



<script>
	$(document).ready(function () {
	});
</script>



<script type="text/javascript">
// Segment Basic Code: 
  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.0.1";
  analytics.load("JhEbtZuoGjwvJDuBM4WJa06gpZHRKpvY");
  analytics.page()

//User Tracking
  analytics.identify('f4ca124298', {
  name: 'Michael Bolton',
  email: 'mbolton@initech.com'
  });
// End Usertracking

  }}();
  
</script>



<script>
	$(function() {
		// alert("Great to see you!");
		console.log("submitHandler: google analytics call event");
		ga('send', 'event', 'buchung', 'click', 'workshoptyp', 1);
		$('#panel2').css("color", "red");
		//$('#panel1').hide(300).show(1000).delay(1000).slideup(1000).toggle(300);
	


	});
</script>


</body>