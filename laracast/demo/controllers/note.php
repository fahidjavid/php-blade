<?php

$config = require_once "config.php";
$db     = new Database( $config['database'] );

global $note;

$note = $db->query( "select * from notes where id = :id", [ ':id' => $_GET['id'] ] )->getOrFail();

$heading      = 'Note';
$current_user = 1;

if ( ! authorize( $current_user === $note['user_id'] ) ) {
	abort( Response::FORBIDDEN );
}

require "views/note.view.php";