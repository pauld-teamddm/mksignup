<?php
$bluePlayers = $this->get('bluePlayers');
$grayPlayers = $this->get('grayPlayers');
?>
<div class="row">
	<div class="span6">
		<h2>Blue Division</h2>
<?
	foreach ($bluePlayers as $player) :
		$divisionClass = 'division-' . fURL::makeFriendly($player->getDivision());
		
?>
		<div class="span6">
			<div class="well player <?=$divisionClass?>">
				<img src="http://www.gravatar.com/avatar/<?=md5($player->getEmail())?>?s=150&d=retro" alt="<?=$player->prepareName()?>" height="75" width="75" class=pull-left>
				<p>
					<a href="mailto:<?=$player->prepareEmail()?>" class="name"><?=$player->prepareName(); ?></a><br/>
					<span class="label label-success"><i class="icon-certificate icon-white"></i> <?=$player->preparePoints()?></span>
				</p>
				
			</div>
		</div>
<?php
	endforeach;
?>
	</div>
	<div class="span6">
		<h2>Gray Division</h2>
<?
	foreach ($grayPlayers as $player) :
		$divisionClass = 'division-' . fURL::makeFriendly($player->getDivision());
?>
		<div class="span6">
			<div class="well player <?=$divisionClass?>">
				<img src="http://www.gravatar.com/avatar/<?=md5($player->getEmail())?>?s=150&d=retro" alt="<?=$player->prepareName()?>" height="75" width="75" class=pull-left>
				<p>
					<a href="mailto:<?=$player->prepareEmail()?>" class="name"><?=$player->prepareName(); ?></a><br/>
					<span class="label label-success"><i class="icon-certificate icon-white"></i> <?=$player->preparePoints()?></span>
				</p>
				
			</div>
		</div>
<?php
	endforeach;
?>
	</div>
</div>