<html>
	<head>
		<title>Disable video options</title>
	</head>
	<body style="lightgreen">
		<video width="600" height="350" class="videoController" controls autoplay >
			<source src="video.mp4" type="video/mp4" />
		</video>
		
		<script src="jquery-3.7.1.min.js"></script>
		<script>
			$(document).ready(function(){
				$(".videoController").attr("controlsList","nodownload");
				$(".videoController").attr("oncontextmenu","return false;");
				
				$(this).bind("contextmenu", function(e) {
					e.preventDefault();
				});
			});
		</script>
	<body>
</html>