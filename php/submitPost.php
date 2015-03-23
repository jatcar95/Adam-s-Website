<?php
	$title = $_POST["title"];
	$post = $_POST["post"];
	file_put_contents("../txt/$title.txt", "$title\r\n$post\r\n", FILE_APPEND);
	header("Location: ../index.php");
?>