<?php
include 'core.php';

class EntryController extends CoreController{

	function index() {
		
		$this->template->set('characters', fRecordSet::build('Character'));
		$this->template->set('players', fRecordSet::build('Player'));
		$this->template->set('matches', fRecordSet::build('Round'));
	}

/*
	function display($player_slug) {
		$player = new Player(array('slug' => $player_slug));
		$this->template->set('player', $player);
		$this->template->set('body', 'entry.php');
	}
*/

}
