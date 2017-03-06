<?php
    $host ='localhost';
    $username ='root';
    $password='';
    $db = 'jicadc_db';

    //connecting to the database
    $dbh = new PDO("mysql:host=$host;dbname=$db",$username,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>