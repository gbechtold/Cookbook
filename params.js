var _gaq = _gaq || [];
_gaq.push(['_setAllowAnchor', 'true']); // tell GA to read params from hash
_gaq.push(['_trackPageview']);
_gaq.push(function(){(window.document.title, window.location.pathname)});

// get URL Parameter
function getURLParameter(name) {
  return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null
}

var campaign = getURLParameter('t202id');
var source = getURLParameter('t202kw');
var medium = getURLParameter('Network');
var term = getURLParameter('ad');
var content = getURLParameter('SiteTarget');
//Debugging: console.log('Campaign:',campaign,'Source:',source,'Network:',medium,'Term:',term,'Content:',content);

if (typeof t202id !== 'undefined') {
    window.location.href = "#utm_campaign=" + campaign + "&utm_medium=" + medium + "&utm_source=" + source + "&utm_term=" + term + "&utm_content=" + content;
}

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();