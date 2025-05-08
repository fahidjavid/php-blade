<?php
$heading = 'My Notes';


$config = require_once "config.php";
$db    = new Database( $config['database'] );

global $posts;
$posts = $db->query( "select * from notes" )->getAll();

require "views/notes.view.php";