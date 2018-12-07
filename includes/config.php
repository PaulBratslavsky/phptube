<?php
    // Turns on output buffering - waits for all code execution before output
    ob_start();
    date_default_timezone_set( "America/New_York" );

    // Connect to data can use mysqli or PDO.  We are using PDO more secure
    try {
        $connection = new PDO( "mysql:dbname=VideoTube;host=localhost", "root", "root" );
        $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    } catch ( PDPException $e ) {
        echo "Connection Failed: " . $e->getMessage();
    }
?>