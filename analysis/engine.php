<?php
	header("content-type:application/json");
	
	$source = $_POST['source'];
	$arr = array('output'=>'');
	
	// Replace '<' and '>' Characters
	if (!function_exists('replaced'))
	{
		function replaced($input) 
		{
			return str_replace(array('<', '>'), array('&lt;', '&gt;'), $input);
		}
	}
	
	// Line Arrays
	$lines = explode("\n", replaced($source));
	
	for ($i=0; $i<count($lines);$i++)
	{
		if (preg_match("/[^_]input/", $lines[$i], $match))
		{
			$arr['output']+= "On line# ($i+1) : Avoid using input(). Use raw_input(). <br>";
		}
		if (preg_match("/[^_]range/", $lines[$i], $match))
		{
			$arr['output']+= "On line# ($i+1) : Avoid using range(). Use x_range()";
		}
	}
	print_r($arr);
?>