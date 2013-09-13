<?php 

$con = mysql_connect( "clerkpress.dev01.chicityclerk.com", "admin22", "H2tha!zzo" );

	if( !$con ) :
		die( 'Could not connect: ' . mysql_error() );
	endif;
	
	mysql_select_db("clerkData_dev01", $con);
	
?>