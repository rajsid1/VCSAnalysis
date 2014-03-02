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
	
	for ($i=1; $i<count($lines)+1;$i++)
	{
		if (preg_match("/[^_]input/", $lines[$i-1], $match))
		{
			$arr['output'].= "On line# $i : Avoid using input(). Use raw_input(). <br>";
		}
		if (preg_match("/[^_]range/", $lines[$i-1], $match))
		{
			$arr['output'].= "On line# $i+ : Avoid using range(). Use x_range()";
		}
	}
	echo json_encode($arr);
?>