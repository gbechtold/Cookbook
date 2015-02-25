
//?t202id=91403&t202kw=blaetterkatalog&Network=SignupBlog&ad=pdf-blaetterkatalog-selbst-erstellt-easy&SiteTarget=gtsl.de
//?t202id=123&page=home
//?utm_source=adwords&utm_medium=testmed&utm_term=testkw&utm_content=testcon&utm_campaign=testname
// Prototype of the url for this script is /index.php?id=123&page=home
//
// page/flipbook-2/
// analytics.page({
//   path: '/flipbook-2/',
//   referrer: 'http://www.google.com/afs/ads?q=kvisoft%20flipbook%20maker%20pro%20crack&lo=false&adpage=1&adrep=2&r=m&fexp=21404%2C7000107&client=infospace-syn-flyingbird&channel=ch1&hl=en&adtest=off&adsafe=high&type=0&oe=UTF-8&ie=UTF-8&jsei=3&format=p4%7Cn3&ad=n3p4&nocache=3801424874976822&num=0&output=uds_ads_only&v=3&adlh=on&adext=as1%2Csr1&bsl=10&u_his=1&u_tz=600&dt=1424874976823&u_w=1920&u_h=1080&biw=1912&bih=916&psw=1912&psh=916&frm=0&uio=uv3cs1lo0va1sr1sl1as3-lHff2st16sd13sv13da0-lhff2st16sd13sv13da0&rurl=http%3A%2F%2Fsearches.vi-view.com%2Fsearch%2Fweb%3Ftype%3Dhp%26channel%3Damt%26q%3Dkvisoft%2Bflipbook%2Bmaker%2Bpro%2Bcrack&referer=http%3A%2F%2Fmystart.vi-view.com%2F%3Fts%3D1380000000%26z1%3Dkvisoft%2Bflipbook%2Bmaker%2Bpro%2Bcrack%26z2%3D1424874972%26z3%3D09233dd43a5f929b38164946b9c55176%26z4%3D1408041200%26type%3Dhp%26channel%3Damt',
//   title: 'Yumpu',
//   search: '?t202id=13011588&t202kw=flip%20book%20maker&Network=Search&ad=42829708659&SiteTarget=&gclid=CMaAr_yo_cMCFU6VvQod63wA7A',
//   url: 'http://en.yumpu.com/flipbook-2/?t202id=13011588&t202kw=flip%20book%20maker&Network=Search&ad=42829708659&SiteTarget=&gclid=CMaAr_yo_cMCFU6VvQod63wA7A'
// });
//
// Example 1: http://127.0.0.1/cookbook/ex1-11-3jsvars.php?utm_source=KingSrc&utm_medium=Kingtestmed&utm_term=Kingtestkw&utm_content=Kingtestcon&utm_campaign=Kingtestname
// Example 2: http://127.0.0.1/cookbook/ex1-11-3jsvars.php?t202id=KaiserID&t202kw=KaiserKW&Network=KaiserNET&ad=KaiserAD42829708659&SiteTarget=KaiserSite&gclid=CMaAr_yo_cMCFU6VvQod63wA7A
//
//
// var _gaq = _gaq || []; 
// _gaq.push(['_trackPageview', campid + campkw + campad]); 


var campid = getUrlVars()["t202id"];
var campkw = getUrlVars()["t202kw"];
var campnet = getUrlVars()["Network"];
var campad = getUrlVars()["ad"];
var campsite = getUrlVars()["SiteTarget"];

analytics.track('Tracking', {
  utm_campaign: campid,
  utm_term: campkw,
  utm_source: campnet,
  utm_content: campad,
  utm_medium: campsite,
	});

analytics.page('Page', {
  utm_campaign: campid,
  utm_term: campkw,
  utm_source: campnet,
  utm_content: campad,
  utm_medium: campsite,
	});

if (typeof campid === "undefined") {
// no variable "campaignid" is defined in the current scope *or* has been assigned the value undefined  
} else {
// Display value of set variable
// alert(campid);
// alert(campkw);
// alert(campnet);
// alert(campad);
// alert(campsite);
// Write to the Document
document.write(campid);
document.write(campkw);
document.write(campnet);
document.write(campad);
document.write(campsite);
// Read and extract vars from Url
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}
}

