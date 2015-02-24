
//?t202id=91403&t202kw=blaetterkatalog&Network=SignupBlog&ad=pdf-blaetterkatalog-selbst-erstellt-easy&SiteTarget=gtsl.de
//?t202id=123&page=home
// Prototype of the url for this script is /index.php?id=123&page=home
var campid = getUrlVars()["t202id"];
var campkw = getUrlVars()["t202kw"];
var campnet = getUrlVars()["Network"];
var campad = getUrlVars()["ad"];
var campsite = getUrlVars()["SiteTarget"];

if (typeof campid === "undefined") {
// no variable "campaignid" is defined in the current scope *or* has been assigned the value undefined  
} else {
// Display value of set variable
alert(campid);
alert(campkw);
alert(campnet);
alert(campad);
alert(campsite);
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

