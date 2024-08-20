<?php

require 'functions.php';
require 'Database.php';
//require 'router.php';


$config = [
	'host'    => 'localhost',
	'port'    => 3306,
	'dbname'  => 'myapp',
	'charset' => 'utf8mb4'
];

$db    = new Database($config);
$posts = $db->query( "select * from posts" )->fetchAll( PDO::FETCH_ASSOC );

foreach ( $posts as $post ) {
	echo '<li>' . $post['title'] . '</li>';
}