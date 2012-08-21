<?php
include 'core.php';

class PlayersController extends CoreController{
	
	function add() {
		try {
			$email = strtolower(fRequest::get('email'));
			$name = fRequest::get('name');
			
			$players = fRecordSet::build('Player', array('email=' => $email));
			
			$msg = '';
			if ($players->count() > 0) {
				$player = $players->getRecord(0);
				$name = $player->getName();
				$msg = "Hey, pally! You already signed up! See yourself down there? It's the one labeled \"{$name}\".";
			} else {
				$player = new Player;
				$player->setEmail(fRequest::get('email'));
				$player->setName($name);
				$player->setSlug(fURL::makeFriendly($name));
				$player->store();
				$msg = "Thanks, {$name}, you've been added to the participant list!";
			}
			
			
			fMessaging::create('success', '/players', $msg);
			fURL::redirect('/players');
		} catch (fExpectedException $e) {
			echo $e->printMessage();
		}
	}
	
	function index() {
		$this->template->set('players', fRecordSet::build('Player', array(), array('name' => 'asc')));
	}
	
	function display($player_slug) {
		$player = new Player(array('slug' => $player_slug));
		$this->template->set('player', $player);
		$this->template->set('body', 'player.php');
	}
	
}