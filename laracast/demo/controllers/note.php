<?php
$heading = 'My Notes';


$config = require_once "config.php";
$db     = new Database( $config['database'] );
$query  = "select * from notes where id = :id";
$id     = $_GET['id'];
global $note;
$note = $db->query( $query, [ ':id' => $id ] )->fetch( PDO::FETCH_ASSOC );

require "views/note.view.php";