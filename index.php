<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Jump!</title>
	<meta name="description" content="The Jump Event">
	<meta name="author" content="1UP.uy">
	<link rel="stylesheet" href="css/s.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script src="js/parallax.js"></script> -->
	<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>


</head>

<body>
	<div id="container">
		<img src="https://picsum.photos/1920/1080?random" />
		<div class="logoShade">Jump</div>
		<div class="logo">Jump</div>
		<div class="comingSoon"></div>
	</div>

	<script>
		$("#container").mousemove(function(e) {
			parallaxIt(e, ".logo", -150);
			parallaxIt(e, ".logoShade", -130);
			parallaxIt(e, "img", -20);
		});

		function parallaxIt(e, target, movement) {
			var $this = $("#container");
			var relX = e.pageX - $this.offset().left;
			var relY = e.pageY - $this.offset().top;

			TweenMax.to(target, 1, {
				x: (relX - $this.width() / 2) / $this.width() * movement,
				y: (relY - $this.height() / 2) / $this.height() * movement
			});
		}
	</script>
</body>
</html>