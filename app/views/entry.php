<?php
$allPlayers = $this->get('players');
$allCharacters = $this->get('characters');
$matches = $this->get('matches');
?>

<div class="row">
	<h1>Add Result</h1>
	<br />
	<form class="form-horizontal" action="/play/add" method="post">
		<div class="control-group">
			<label class="control-label" for="player_id">Player</label>
			<div class="controls">
				<select name="player_id">
					<option value="">---</option>
				<? foreach ($allPlayers AS $player): ?>
					<option value="<?=$player->getPlayerId()?>"><?=$player->getName()?></option>
				<? endforeach; ?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="character_id">Character</label>
			<div class="controls">
				<select name="character_id">
					<option value="">---</option>
				<? foreach ($allCharacters AS $character): ?>
					<option value="<?=$character->getId()?>"><?=$character->getName()?></option>
				<? endforeach; ?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="match">Match</label>
			<div class="controls">
				<select name="match">
					<option value="">---</option>
				<? foreach ($matches AS $match): ?>
					<option value="<?=$match->getId()?>"><?=$match->getName()?></option>
				<? endforeach; ?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="points">Points</label>
			<div class="controls">
				<input type="text" name="points" />
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<input type="submit" value="Save Result" class="btn btn-success" />
			</div>
		</div>
	</form>

</div>