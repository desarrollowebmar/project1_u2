<?php
if ($_REQUEST) {
	$link=mysqli_connect("sql5.freesqldatabase.com", "sql555161", "hS6*jG7%", "sql555161", "3306");
	//servidor, user, password, nombre database, puerto
	if (! $link) {
	echo"<h2>Cannot connect to mysql</h2>";
		die ();
	}
	//mysqli_select_db($link, "daw");
	$url_d = $_REQUEST ["url"]; //donde queremos ir
	$url_s = $_SERVER ["HTTP_REFERER"];//de donde viene

	$query = "INSERT INTO spy(url_s_source, url_d_destiny) VALUES ('$url_s', '$url_d')"; //ponemos comillas para no tener que concatenar
	//cuando ya tengo el texto, hay que enviarlo al servidor
	$result = mysqli_query ( $link, $query ); //we send the query and get a...
	//el result me va a decir si la query ha entrado o no
	
	//ya he acabado con la base de datos

	//write the proper HTTP 1.1 Headers for redirection	
	header("Location: $url_d");
	//echo $url_d;
	//header("Location: http://www.elpais.es"); 
	//http:$url_d/”);
	//exit;
}
?>
