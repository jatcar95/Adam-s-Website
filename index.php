<!DOCTYPE html>

<?php
	$cookie_name = $_SERVER['REMOTE_ADDR'];
	$cookie_value = "foo";
	$view_count = file_get_contents("viewCount.txt");
	if (!isset($_COOKIE[$cookie_name])) {
		setcookie($cookie_name, $cookie_value, time() + 60*60);
	}
	$view_count = $view_count + 1;
	file_put_contents("viewCount.txt", $view_count);
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/adam.css">
		<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
	</head>

	<body>
		<h1 id="title">
			Adam's Super Awesome Website	
		</h1>

		<div id="menu">
			<span class="menuitem">Home</span>
			<span class="menuitem">Pictures</span>
			<span class="menuitem">Travel Blog</span>
			<span class="menuitem">Academia</span>
		</div>

		<div id="profile">
			<img src="images/adamProfile.jpg">
			<p>
				Hello, I'm Adam. I'm super cool. Look at my super cool website :)
			</p>

			<div id="logo">
				<a href="https://www.facebook.com/adam.griffis.3?fref=ts"><img src="images/logoFacebook.png"></a>
				<a href="https://twitter.com/adam_griffis"><img src="images/logoTwitter.jpg"></a>
				<a href="http://www.linkedin.com/in/adamgriffis/en"><img src="images/logoLinkedIn.png"></a>
			</div>

			<p>
				Views: <?= $view_count ?>

			</p>
		</div>

		<div id="blog">
			<form id="newPost" method="post" action="php/submitPost.php">
				<h2>New Post</h2>
				<input type="text" name="title" placeholder="Title" id="newposttitle"> <br>
				<textarea name="post" rows="5" placeholder="Type your post here"></textarea>
				<input type="submit">	
			</form>

			<div>
				picture slideshow
			</div>

			<div>
				Travel bloggggg!!!!!!
				posts go here
			</div>
		</div>

	</body>

</html>