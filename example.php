<?php
require 'Safe64.php';

// Use Class
$Str = Safe64::encode('Hello World!!');
$B64 = base64_decode($Str); // Error
$S64 = Safe64::decode($Str); // Hello World!!

// Custom Token
$Token = Safe64::token(); // Generate new Token
$X = Safe64::encode('Testing!!', $Token);
$Y = Safe64::decode($X, $Token);
?>
<h1>Testing Safe64</h1>
<p>
	<b>Safe64::encode:</b>
	<code><?php echo $Str ?></code>
</p>
<p>
	<b>base64_decode:</b>
	<code><?php echo $B64 ?></code>
</p>
<p>
	<b>Safe64::decode:</b>
	<code><?php echo $S64 ?></code>
</p>

<hr>

<h2>Custom Token</h2>
<p>
	<b>Random Token:</b>
	<code><?php echo $Token ?></code>
</p>
<p>
	<b>Safe64::encode:</b>
	<code><?php echo $X ?></code>
</p>
<p>
	<b>Safe64::decode:</b>
	<code><?php echo $Y ?></code>
</p>