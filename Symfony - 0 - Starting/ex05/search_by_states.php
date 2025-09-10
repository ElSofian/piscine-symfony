<?php
	function search_by_states(...$args) {

		$states = [
			'Oregon' => 'OR',
			'Alabama' => 'AL',
			'New Jersey' => 'NJ',
			'Colorado' => 'CO',
		];
		$capitals = [
			'OR' => 'Salem',
			'AL' => 'Montgomery',
			'NJ' => 'trenton',
			'KS' => 'Topeka',
		];

		$capitals_founded = array();
		$capitals_not_founded = array();

		foreach ($args as $arg) {
			
			if (isset($states[$arg])) {
				
				if (isset($capitals[$states[$arg]])) {
					echo $capitals[$states[$arg]] . " is the capital of " . $arg . ".\n";
				}
				
				continue;
			}

			if (in_array($arg, $capitals)) {
				
				$state_code = array_search($arg, $capitals);
				$state_name = array_search($state_code, $states);
				
				if ($state_name !== false) {
					echo $arg . " is the capital of " . array_search(array_search($arg, $capitals), $states) . ".\n";
				} else {
					echo $arg . " is neither a capital nor a state.\n";
				}

				continue;
			}

			echo $arg . " is neither a capital nor a state.\n";
			
		}
		
		return ;
	}

	search_by_states("Oregon", "trenton", "Topeka", "NewJersey") . "\n";
?>