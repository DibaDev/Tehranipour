<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Tehranipour</title>
	<link rel="stylesheet" type="text/css" href="reset.css"/>
	<link rel="stylesheet" type="text/css" href="1styles.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script type="text/javascript">
		var images = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg'];
    var curImage = 0;
    function switchImage()
    {
        curImage = (curImage + 1) % images.length
        document.body.style.backgroundImage = 'url(images/' + images[curImage] + ')'
    }
    window.setInterval(switchImage, 15000);
    
</script>
</head>

<body>
<div class="content-container">
	<header class="head">
		<section class="contain">
			<menu class="menubar">
				<div class="logo">Ebrahim Tehranipour</div>	
				<div class="menu">
					<ul>
						<li><a href="">EMAIL</a></li>
						<li><a href="">GALLERY</a></li>
						<li><a href="">ABOUT</a></li>
						<li><a href="">HOME</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</menu>
			
		</section>
	</header>
	<footer class="foot">
		<section class="slide">
			
		</section>
		<div class="text">
			<p>{ EBRAHIM TEHRANIPOUR } © 2012&nbsp; |&nbsp; ALL RIGHTS RESERVED</p>
		</div>
	</footer>	
	
</div>
</body>
</html>
