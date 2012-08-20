<?php
include 'core.php';

class PlayersController extends CoreController{
	
	function add() {
		try {
			$player = new Player;
			$name = fRequest::get('name');
			$player->setEmail(fRequest::get('email'));
			$player->setName($name);
			$player->setSlug(fURL::makeFriendly($name));
			$player->store();
			
			fMessaging::create('success', '/players', "Thanks, {$name}, you've been added to the participant list!");
			fURL::redirect('/players');
		} catch (fExpectedException $e) {
			echo $e->printMessage();
		}
	}
	
	function index() {
		$this->template->set('players', fRecordSet::build('Player'));
	}
	
	function display($player_slug) {
		$player = new Player(array('slug' => $player_slug));
		$this->template->set('player', $player);
		$this->template->set('body', 'player.php');
	}
	
}