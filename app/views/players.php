<?php
$players = $this->get('players');
?>
<div class="row">
<?
foreach ($players as $player) :
?>
	<div class="span4">
		<div class="well player">
			<img src="http://www.gravatar.com/avatar/<?=md5($player->getEmail())?>?s=150&d=retro" alt="<?=$player->prepareName()?>" height="75" width="75" class=pull-left>
			<p>
				<a href="mailto:<?=$player->prepareEmail()?>" class="name"><?=$player->prepareName(); ?></a><br/>
				<span class="label label-success"><i class="icon-certificate icon-white"></i> <?=$player->prepareWins()?></span> <span class="label"><i class="icon-resize-small icon-white"></i> <?=$player->prepareMatches()?></span>
			</p>
			
		</div>
	</div>
<?php
endforeach;
?>
</div>