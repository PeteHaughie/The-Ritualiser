<html xmlns="http://www.w3.org/1999/xhtml" xmlns:svg="http://www.w3.org/2000/svg">
<!--
*** So what is this? *** 

Good question. The Ritualiser has grown
out of a need to do something interesting
with months of photographs taken in my
travels around Europe in 2010 and 2011.
I'm currently based in Berlin and seem
to be obsessed with urban wild-life, the occult,
opulence and dark imagery. This is how
The Ritualiser came into being.
There's still a lot to do to it,
making it work better in IE would be a good
start but I'm not going to be able to get
the SVG clipping paths working so I'll have
to come up with something else instead.
Opera still doesn't support SVG clipping paths
either so it's best viewed in FF4+, Safari or
Chrome.
Please hang around and keep clicking the sigils.
Feel free to screencap your favourites and send
them to your friends.

Pete Haughie - February, 2010
pete [at] petehaughie [dot] com

-->
<head>

	<?php
		$page_style = array(
			'class="overlay"',
			'class="column"',
			'class="polygon hexagon"'
		);
		$vocalise = array(
			'<span class="rune_1">Sh</span>',
			'<span class="rune_2">S</span>',
			'<span class="rune_3">U</span>',
			'<span class="rune_4">O</span>',
			'<span class="rune_5">V</span>',
			'<span class="rune_6">T</span>',
			'<span class="rune_7">TS</span>',
			'<span class="rune_8">P</span>',
			'<span class="rune_9">F</span>',
			'<span class="rune_10">K</span>',
			'<span class="rune_11">Kh</span>',
			'<span class="rune_12">B</span>',
			'<span class="rune_13">Ve</span>',
			'<span class="rune_14">E</span>',
			'<span class="rune_15">Ey</span>',
			'<span class="rune_16">Ni</span>',
			'<span class="rune_17">Hei</span>',
			'<span class="rune_18">Vav</span>'
		);
		$position = array('left','center','right');
		$effect = array(
			'',
			'class="invert"',
			'class="grayscale"',
			'class="sepia"',
			'class="red"',
			'class="green"',
			'class="blue"',
			'class="purple"'
		);
		$imgs = range(1,76);
		shuffle($imgs);
		$imgs = array_slice($imgs, 0, 3);
	?>

	<link rel="stylesheet" href="css/reset.css" media="screen" />
	<link rel="stylesheet" href="css/stylesheet.css" media="screen" />
	<!--[if ie]>
	<meta name="svg.render.forceflash" content="true">
	<link rel="stylesheet" href="css/ie.css" media="screen" />
	<script src="js/svg.js"></script>
	<![end if]-->

	<title>The Ritualiser</title>
</head>
<body <?php echo $page_style[round(mt_rand(0,2))]; ?>>
	<div id="wrapper">
	<span class="sigil">
		<?php echo $vocalise[round(mt_rand(0,17))]?>
		<?php echo $vocalise[round(mt_rand(0,17))]?>
		<?php echo $vocalise[round(mt_rand(0,17))]?>
	</span>
	<span class="sigil">
		<?php echo $vocalise[round(mt_rand(0,17))]?>
		<?php echo $vocalise[round(mt_rand(0,17))]?>
		<?php echo $vocalise[round(mt_rand(0,17))]?>
	</span>
	<span class="sigil">
		<?php echo $vocalise[round(mt_rand(0,17))]?>
		<?php echo $vocalise[round(mt_rand(0,17))]?>
		<?php echo $vocalise[round(mt_rand(0,17))]?>
	</span>
	<?php // print_r($position); ?>
	<ul id="stage">
		<?php foreach($imgs as $img): ?>
			<li class="<?php echo $position[round(mt_rand(0,2))]; ?>"><img <?php echo $effect[round(mt_rand(0,7))]; ?>src="images/ritual_<?php echo $img ?>.jpg" /></li>
		<?php endforeach; ?>
	</ul>
	</div>
</body>

<script src="js/jquery-1.5.min.js"></script>
<script src="js/pixastic.custom.js"></script>
<script src="js/functions.js"></script>

</html>