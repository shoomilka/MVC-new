<?php

function __autoload( $className ) {
	$className = str_replace( "..", "", $className );
	require_once( "models/$className.php" );
}

require_once("models/User.php");
require_once("models/Task.php");