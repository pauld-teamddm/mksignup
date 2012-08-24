<?php

$text = <<<TEXT
# Rules

The rules - and your fate - have already been determined by the programmers 
of MarioKart 64.

The only tournament-related rule is the question of controller. We will 
only use original N64 controllers - no 3rd party or "turbo" controllers 
will be allowed.

## Chatter

We're talking about the tournament on [irc at the #mk64 channel](irc://#mk64@dev.ddmnet.com).

## Schedule

The tournament is tentatively scheduled for Tuesday, August 28. Flag 
waves at 5:30.

## Tournament Structure

### Qualifiers

 - Each division will play five rounds.
 - Each round will have four of the five division players; which player sits out will be determined alphabetically by first name.
 - Each round will play the full _Mushroom Cup_.
 - Players will accumulate points from their cup placement.

### Semi-Finals

 - Semifinal seeds will be the top two players of each division.
 - Semifinal rounds will be two-player, head-to-head, plus computer players.
 - Semifinals will be played on _Flower Cup_.
 - Winner of the semifinal round will be named Champion of their division.

### Finals

 - Final head-to-head match, Blue Champion vs Gray Champion.
 - _Star Cup_.
 - Ultimate winner will be crowned <strong>2012 MarioKart 64 Tournament Champion</strong>.

TEXT;
?>
<blockquote class="pull-right">
	<p>It's-a me, Mario!</p>
	<small>Mario</small>
</blockquote>
<?php
echo Markdown($text);