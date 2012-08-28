<?php
include 'core.php';

class PlayController extends CoreController{
	
	function add() {
		try {
			$player_id = fRequest::get('player_id');
			$character_id = fRequest::get('character_id');
			$points = fRequest::get('points', 'integer');
			$match = fRequest::get('match');
			
			$play = new Play;
			$play->setPlayerId($player_id);
			$play->setCharacterId($character_id);
			$play->setPoints($points);
			$play->setMatch($match);
			$play->store();
			
			$player = new Player($player_id);
			$points += $player->getPoints();
			$player->setPoints($points);
			$player->store(); 
			
			fMessaging::create('success', '/entry', 'Result record saved.');
			fURL::redirect('/entry');
		} catch (fExpectedExcetion $e) {
			echo $e->printMessage();
		}
	}
	
}