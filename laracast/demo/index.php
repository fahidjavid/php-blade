<?php

require 'functions.php';
require 'Database.php';
//require 'router.php';


$config = require_once "config.php";

$db    = new Database( $config['database'] );

$query = "select * from posts where id = :d";

$posts = $db->query( $query, [':d' => 2] )->fetchAll( PDO::FETCH_ASSOC );

foreach ( $posts as $post ) {
	echo '<li>' . $post['title'] . '</li>';
}