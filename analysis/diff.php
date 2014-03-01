<?php
	// HTML Table
	echo '<table width="100%">' . "\n<tbody>\n<tr>\n";
	echo '<td valign="top">' . "\nCurrent Version:<hr>\n<pre>\n";
	
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
									echo $cw["$w"];
									echo ($w != ($wc - 1)) ? ' ' : "\n";
							} else {
									echo '<b style="color: #00BB00;">' . @$cw["$w"];
									echo ($w != ($wc - 1)) ? '</b> ' : "</b>\n";
							}
					}
			} else {
					echo $cv["$l"] . "\n";
			}
	}
	
	// Ending HTML Tags
	echo "</pre>\n</td>\n<td>&nbsp;</td>\n";
	echo '<td valign="top">' . "\nOld Version:<hr>\n<pre>\n";
	
	// Read and Display Old Version
	echo replaced(array_key_exists($key2, $oldFiles) ? $oldFiles[$key2] : '') . "\n";
	echo "</pre>\n</td>\n</tr>\n</tbody>\n</table>";
?>