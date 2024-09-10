<?php
if(isset($_GET['r'])) {
	$opts = array(
  	'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n"
  )
);
	$context = stream_context_create($opts);
####################################################################
#				BELOW IS THE URL VARIABLE STRING
#	
#				THIS WILL BE IMPROVED LATER
#####################################################################	
	
		$expected_gvars = array('r' => 1);
	$gstring = ""; 
	foreach($_GET AS $gkey=>$gval) {
		if (!array_key_exists($gkey, $expected_gvars)) {	
			$gstring .= "&".$gkey."=".$gval;
		}		
	}
		
	$url = "http://beta.paxlib.com/access.php?r={$_GET['r']}".$gstring;	
	
	// if(isset($_GET['state'])) {	$url .= "&state=".$_GET['state']; }
	// if(isset($_GET['city'])) {	$url .= "&city=".$_GET['city']; }
	// if(isset($_GET['country'])) {	$url .= "&country=".$_GET['country']; }
///////////////////////////////////////////////////////////////////////

	$site = file_get_contents($url, false, $context);
	
	echo $site;
}


?>
