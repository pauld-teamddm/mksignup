<?php

$text = <<<TEXT
# Rules

The rules - and your fate - have already been determined by the programmers 
of MarioKart 64.

The only tournament-related rule is the question of controller. We will 
only use original N64 controllers - no 3rd party or "turbo" controllers 
will be allowed.

## Tournament Structure

There are a few potential structures we could use for tournament play. 
The candidates are as follows:

### Four-player qualifying rounds, Single-elimination One-on-One Playoffs

All players are sorted into four-player groups, and play the Mushroom Cup.

Top two players from each Mushroom Cup will be seeded into the playoffs, 
with rankings based on points earned playing the cup.

Because it would be unfair to run any Cup without a full four players, 
this format can only work well if there is a multiple of four players 
entered.  However, I believe this would be extremely fun if the number
of entrants allows.

### Round Robin, Single-elimination One-on-One Playoffs

Each player plays each other player, gaining a point for each win.

The four players with the most points following all matches will be
seeded into the playoffs.

TEXT;
?>
<blockquote class="pull-right">
	<p>It's-a me, Mario!</p>
	<small>Mario</small>
</blockquote>
<?php
echo Markdown($text);