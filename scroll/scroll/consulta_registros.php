<?php

$page = (int) (!isset($_GET['p'])) ? 1 : $_GET['p'];
# sql query
$sql = "SELECT * FROM actor_info ORDER BY id DESC";
# find out query stat point
$start = ($page * $limit) - $limit;
# query for page navigation
if( mysql_num_rows(mysql_query($sql)) > ($page * $limit) ){
	$siguiente = ++$page;
}
$query = mysql_query( $sql . " LIMIT {$start}, {$limit}");
if (mysql_num_rows($query) < 1) {
	header('HTTP/1.0 404 Not Found');
	echo 'Page not found!';
	exit();
}
?>