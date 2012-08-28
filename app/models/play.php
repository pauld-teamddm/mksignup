<?php

class Play extends fActiveRecord {
	
	protected function configure() {
		
	}
	
	static function getPointsForPlayer($player, $conditions = false) {
		$pid = $player->getPlayerId();
		$plays = fRecordSet::build('Play', array('player_id=' => $pid));
		$points = $plays->reduce(array('Play', 'total_points'), 0);
		return $points;
	}
	
	static function total_points($tally, $points) {
		return $tally + $points->getPoints();
	}
	
}