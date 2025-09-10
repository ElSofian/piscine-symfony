<?php
	function get_capital_city_from($city) {

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

		if (!isset($states[$city]))
			return "Unknown";
		$state_acronym = $states[$city];

		if (!isset($capitals[$state_acronym]))
			return "Unknown";
		$capital = $capitals[$state_acronym];
		
		return $capital;
	}

	echo get_capital_city_from("Oregon") . "\n";
	echo get_capital_city_from("Origon") . "\n";
?>