<?php
    require('posts.php');
	require('comentarios.php');
	
	// Utilizando apelidos para os namespaces
	use Blog\Posts\Iterator as Post;
	use Blog\Comentarios\Iterator as Comentario;
	
	
	$posts = new Post;
	echo "<br><br><hr>";
	$comentarios = new Comentario;
?>