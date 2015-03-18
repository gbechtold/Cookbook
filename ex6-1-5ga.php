<?php


?>


<head>



</head>
<body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59582458-2', 'auto');
  ga('send', 'pageview');
</script>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-XXXXXXX-XX']);
_gaq.push(['_setAllowAnchor', 'true']); // tell GA to read params from hash
_gaq.push(['_trackPageview']);
_gaq.push(function(){
    history.pushState("", document.title, window.location.pathname); // remove hash
});

var campaign = "spring";
var medium = "email";
var source = "source";
var content = "content";

// add params to hash, if some condition is true
if (true) {
    window.location.href = "#utm_campaign=" + campaign + "&utm_medium=" + medium + "&utm_source=" + source + "&utm_content=" + content;
}

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

<!-- 

<script async src="campaign-loader.js"></script>
http://127.0.0.1/cookbook/ex6-1-5ga.php?utm_source=MYsource&utm_medium=MYmedium&utm_term=MYCampaign&utm_content=MYContent&utm_campaign=MYCampaignname -->



</body>