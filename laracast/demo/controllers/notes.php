<?php
$heading = 'My Notes';


$config = require_once "config.php";
$db    = new Database( $config['database'] );
$query = "select * from notes";
global $posts;
$posts = $db->query( $query )->fetchAll( PDO::FETCH_ASSOC );

require "views/notes.view.php";