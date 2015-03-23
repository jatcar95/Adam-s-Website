<?php
	$title = $_POST["title"];
	$post = $_POST["post"];
	file_put_contents("../txt/$title.txt", "$post\r\n", FILE_APPEND);
	header("Location: ../index.php");
?>