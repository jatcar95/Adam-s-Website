<?php
	$title = $_POST["title"];
	$post = $_POST["post"];

	file_put_contents("/posts.txt", $title + "\n", FILE_APPEND);
	file_put_contents("/posts.txt", $post + "\n", FILE_APPEND);
?>