<?php

$mysqli = new mysqli('localhost', 'root', 'rootPsw', 'db_gestionale');

if ($mysqli->connect_error) {
    die('Errore di connessione (' . $mysqli->connect_errno . ') '
    . $mysqli->connect_error);
}



