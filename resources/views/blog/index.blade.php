<!DOCTYPE HTML>
<!--
	Her Intranet of Things
	Madison Genevieve Blog
-->
<html>
	<head>
		<title>Madison Genevieve</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./css/main.css" />
		<noscript><link rel="stylesheet" href="./css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">
				
				<!-- Intro -->
					@include('blog.intro');

				<!-- Nav -->
					@include('blog.nav');

				<!-- Main -->
					@include('blog.main');

				<!-- Footer -->
					@include('blog.footer');

		<!-- Scripts -->
			<script src="./js/jquery.min.js"></script>
			<script src="./js/jquery.scrollex.min.js"></script>
			<script src="./js/jquery.scrolly.min.js"></script>
			<script src="./js/skel.min.js"></script>
			<script src="./js/util.js"></script>
			<script src="./js/main.js"></script>

	</body>
</html>