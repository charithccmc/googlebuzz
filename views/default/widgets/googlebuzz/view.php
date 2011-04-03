<?php

/**
 * Elgg Google Buzz view page
 *
 * @package ElggGoogleBuzz
 */

//some required params

$username = $vars['entity']->googlebuzz_username;
$get = $vars['entity']->googlebuzz_get;
$num = $vars['entity']->googlebuzz_num;


// if the google username , number of buzz get from google buzz , nummber of buzz show at time   is empty, then do not show
if ($username && $get && $num) {

?>

<div id="googlebuzz_widget">
	
	<script type="text/javascript" src="http://google-buzz-widget.googlecode.com/files/jquery.google-buzz-1.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ $('#my-buzz').googleBuzz({ 
			username:'<?php echo $username; ?>' ,
			n:<?php echo $get; ?> ,
			show_n:<?php echo $num; ?> 
		});});
	</script>
	<div class="contentWrapper">
		<div id="my-buzz"></div>
	</div>
</div>


<?php
} else {

	echo "<div class=\"contentWrapper\"><p>" . elgg_echo("googlebuzz:notset") . ".</p></div>";

}
