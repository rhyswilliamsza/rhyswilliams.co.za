<!DOCTYPE HTML>
<html>
	<head>
		<title>Life Through my Lens</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div id="main" class="is-loading-0 is-loading-1 is-loading-2">
			<header id="header">
				<h1>Life Through My Lens</h1>
				<p>A photography project by</br><a href="https://rhyswilliams.co.za">Rhys Williams</a></p>
				<ul class="icons">
					<li><a href="https://twitter.com/rhyswilliamsza" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.instagram.com/rhyswilliamsza/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				</ul>
			</header>
			
			<section id="thumbnails">

				<!-- PHP to load all articles from JSON -->
				<?php
				$json = file_get_contents('https://cdn.rhyswilliams.co.za/ltml/content.json', true);
				$articles = json_decode($json, false);

				for ($i=0; $i < count($articles); $i++) {
					$article = $articles[$i]; 
				?><article>
					<a class='thumbnail' href='<?php echo $article->src; ?>' data-position='left center'><img src='<?php echo $article->src; ?>' alt='' /></a>
					<h2>#<?php echo $article->number; ?></h2>
					<p><?php echo $article->date; ?></p>
				</article>

				<?php } ?>

			</section>

			<footer id="footer">
				<ul class="copyright">
					<li>&copy; Rhys Williams</li>
				</ul>
			</footer>
		</div>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>