<?php

    /**
	 * Elgg Google Buzz edit page
	 *
	 * @package ElggGoogleBuzz
	 */

?>
	<p>
		<?php echo elgg_echo("googlebuzz:username"); ?>
		<input type="text" name="params[googlebuzz_username]" value="<?php echo htmlentities($vars['entity']->googlebuzz_username); ?>" />	
		<br /><?php echo elgg_echo("googlebuzz:get"); ?>
		<input type="text" name="params[googlebuzz_get]" value="<?php echo htmlentities($vars['entity']->googlebuzz_get); ?>" />	
		<br /><?php echo elgg_echo("googlebuzz:num"); ?>
		<input type="text" name="params[googlebuzz_num]" value="<?php echo htmlentities($vars['entity']->googlebuzz_num); ?>" />	
	
	</p>