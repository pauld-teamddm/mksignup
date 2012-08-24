<?php
	$endSignUp = (time() > SIGNUP_CUTOFF);
?>
<div class="row">
	<div class="span4">
		<img src="img/mario-kart-woodblock.jpg" alt="MarioKart" title="Because if MarioKart was real life, this is what it would look like.">
	</div>
	<div class="span8">
		<div class="hero-unit">
			<h1>MarioKart&nbsp;64 Tournament&nbsp;of Champions</h1>
			<h2>There can be only one</h2>
<?php
		if ($endSignUp):
?>
			<p>See the <a href="/players">players</a></p>
			<p>Round 1 Schedule will be announce Friday, August 24, at 5:00pm</p>
<?php
		else:
?>
			<p><em>Will it be you?</em> Sign up <strong>or you will never know</strong>.</p>
<?php
		endif;
?>
		</div>
<?php
	if (!$endSignUp):
?>
		<form class="signup-form well form-inline" method="post" action="/players/add">
			<input type="text" name="name" placeholder="name"/> <input type="email" name="email" placeholder="email"/> <button type="submit" class="btn">Enter!</button>
		</form>
		<p><small>Signup will close at 5:00pm on Thursday, August 23 so play schedule can be determined.</small></p>
<?php
	endif;
?>
	</div>
</div>