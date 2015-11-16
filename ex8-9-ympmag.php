<?php


echo "home";


$str = <<<EOD

<script type="text/javascript" src="//www.yumpu.com/assets/v4/js/modules/toddycat/bin/YumpuMagazine.min.js"></script>

<div id="myMagazineContainer" style="width:600px; height:450px;"></div>

<script>
   var myYumpu = new Yumpu();
   myYumpu.create_player("#myMagazineContainer", "54090809", { canvasBGColor:"#e65117", fallback_order:"flash,html5,js" } );
</script>


EOD;


echo $str;
?>

