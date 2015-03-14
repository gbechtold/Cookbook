
<?php ?>
<HTML>
<head>
<title>Working Google Analytics Tracking</title>

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
	$(function() {
		// alert("Great to see you!");
		console.log("submitHandler: google analytics call event");
		ga('send', 'event', 'buchung', 'click', 'workshoptyp', 1);
		$('#panel2').css("color", "red");
		//$('#panel1').hide(300).show(1000).delay(1000).slideup(1000).toggle(300);
	


	});
</script>
