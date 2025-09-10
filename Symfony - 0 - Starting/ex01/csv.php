<?php
	$file = file_get_contents("./ex01.txt", true);

	for ($i = 0; $i < strlen($file); $i++) {
		if ($file[$i] == ',') {
			echo "\n";
			continue;
		}
		echo $file[$i];
	};
?>