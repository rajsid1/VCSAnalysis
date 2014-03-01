<?php
	
	// Replace '<' and '>' Characters
	if (!function_exists('replaced'))
	{
		function replaced($input) 
		{
			return str_replace(array('<', '>'), array('&lt;', '&gt;'), $input);
		}
	}
	
	// Line Arrays
	$cv = explode("\n", replaced($value2)); // Current Version
	$ov = explode("\n", replaced(array_key_exists($key2, $oldFiles) ? $oldFiles[$key2] : '')); // Old Version
	$value2='';
	// Count Lines - Set to Longer Version
	$lc = (count($cv) > count($ov)) ? count($cv) : count($ov);
	
	// Fix Mismatched Line Counts
	for ($flc = count($ov); $flc != $lc; $flc++) {
			$ov["$flc"] = '';
	}
	
	for ($l = '0'; $l != $lc; $l++) {
			// Word Arrays
			$cw = explode(' ', $cv["$l"]); // Current Version
			$ow = explode(' ', $ov["$l"]); // Old Version
	
			// Count Words - Set to Longer Version
			$wc = (count($cw) > count($ow)) ? count($cw) : count($ow);
	
			// Fix Mismatched Word Counts
			for ($fwc = count($ow); $fwc != $wc; $fwc++) {
					$ow["$fwc"] = '';
			}
	
			// If each line is identical, just echo the normal line. If not,
			// check if each word is identical. If not, wrap colored "<b>"
			// tags around the mismatched words.
			if ($cv["$l"] !== $ov["$l"]) {
					for ($w = '0'; $w != $wc; $w++) {
							if (@$cw["$w"] === @$ow["$w"]) {
									$value2.=$cw["$w"];
									$value2.=($w != ($wc - 1)) ? ' ' : "\n";
							} else {
									$value2.='<b style="weight:7">' . @$cw["$w"];
									$value2.=($w != ($wc - 1)) ? '</b> ' : "</b>\n";
							}
					}
			} else {
					$value2.=$cv["$l"];
					$value2.="\n";
			}
	}
?>