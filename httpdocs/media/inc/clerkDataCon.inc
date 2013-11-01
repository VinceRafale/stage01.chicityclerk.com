<?php 

$con = mysql_connect( "clerkpress.stage01.chicityclerk.com", "admin21", "H2tha!zzo5" );

	if( !$con ) :
		die( 'Could not connect: ' . mysql_error() );
	endif;
	
	mysql_select_db("clerkData_stage01", $con);
	
?>