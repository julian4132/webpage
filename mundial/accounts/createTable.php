<?php 
include "variables.inc";
$mysqli = new mysqli($host, $user, $pass, $base);

$mysqli->query("drop table if exists usuarios");
$registro = $mysqli->query("create table if not exists usuarios (
	correo	    text,
	passhash		text,
	cuando	 	timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	id		int not null primary key auto_increment,
    logins  int,
	activo   	boolean,
    baneado boolean,
	verifhash		text,
    lastlogin   text,
	nuevocorreo     text,
	nuevopasshash   text
)");

?>
