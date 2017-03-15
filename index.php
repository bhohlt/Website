<!DOCTYPE html>
<html>
<head>
	<title>HTML</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('.menubutton').click(function() {
				$('nav').slideToggle('slow');
			});
		});
	</script>

</head>
<body>
<div class="header">
	<section id="menubar">
		<ul>
			<li><a class="menubutton" href="#menu"><img src="/res/navi.png"></a></li>
		</ul>
	</section>

	<nav class="nav">
		<ul>
			<li><a href="index.php" class="active">Home</a></li>
			<li><a href="php/employ.php">Webdesign</a></li>
			<li><a href="php/gallery.php">Referenzen</a></li>
			<li><a href="php/contact.php">Team</a></li>
			<li><a href="php/contact.php">Kontakt</a></li>
		</ul>
	</nav>
</div class="header">
<div style="width: 100%; height: 500px; margin-top: 25%; background-color: rgba(255,255,255,0.4);text-align: center"><h1>Thiemo</h1></div>
<div style="width: 100%; height: 500px; margin-top: 25%; background-color: rgba(255,255,255,0.4);text-align: center"><h1>David</h1></div>
</body>
</html>
