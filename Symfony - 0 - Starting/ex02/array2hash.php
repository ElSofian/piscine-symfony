<?php
	$array = array(array("Pierre", 30), array("Mary", 28));

	$res = array();

	for ($i = 0; $i < count($array); $i++) {
		$res[$array[$i][1]] = $array[$i][0];
	};

	print_r($res);
?>