<?php
	$array = array(array("Pierre", 30), array("Mary", 28), array("soo", 46));

	$res = array();

	for ($i = 0; $i < count($array); $i++) {
		$res[$array[$i][1]] = $array[$i][0];
	};

	arsort($res);

	print_r($res) . "\n";
?>