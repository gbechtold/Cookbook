<?php ?>

<HTML>
<head>
<title>Playing with Cookies</title>

</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



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
        alert("Welcome again " + vuserid);
    } else {
       vuserid = Math.random().toString(36).substring(7);
       if (vuserid != "" && vuserid != null) {
           setCookie("cuserid", vuserid, 30);
       }
    }
}
</script>

<script>
checkCookie()

</script>


</body>
</html>