<?php
	$elements = file("./ex06.txt");

	$html = "<!DOCTYPE html>
	<html lang=\"en\">
	<head>
		<title>Mendeleiev Table</title>
	</head>
	<body>
		<table border=\"1\" cellspacing=\"0\" cellpadding=\"10\">
		<tr>
	";

	$current_position = 0;

	foreach ($elements as $line) {
		$parts = explode("=", $line, 2);
		$name = trim($parts[0]);
		$attributes = trim($parts[1]);

		$items = explode(",", $attributes);
		$data = ["name" => $name];

		foreach ($items as $item) {
			list($key, $value) = explode(":", $item, 2);
			$data[trim($key)] = trim($value);
		}

		$electrons = explode(" ", trim($data['electron']));
		$last = end($electrons);

		while ($current_position < (int)$data['position']) {
			$html .= "<td></td>";
			$current_position++;
		}

		$html .= "
			<td>
			<h4>" . $data['name'] . "</h4>
			<ul>
				<li>No " . $data['number'] . "</li>
				<li>" . $data['small'] . "</li>
				<li>" . $data['molar'] . "</li>
				<li>" . $last . " " . ($last > 1 ? "électrons" : "électron") . "</li>
			</ul>
			</td>
		";

		$current_position++;

		if ($current_position >= 18) {
			$html .= "</tr><tr>";
			$current_position = 0;
		}
	}

	$html .= "
		</tr>
		</table>
	</body>
	</html>
	";

	file_put_contents("mendeleiev.html", $html);
?>
