<?php
    $env = parse_ini_file('.env');
    $dbc = mysqli_connect($env['DB_HOST'], $env['DB_USERNAME'], $env['DB_PASSWORD'], $env['DB_DATABASE'],$env['DB_PORT']) 
    //$dbc = mysqli_connect('localhost', 'odvozotp_admin', '8dtDvreAuu9w', 'odvozotp_odvozOtpada1') 
    //or die ('Error connecting to database.' . mysqli_connect_error());
?>