<?php
const DSN = 'mysql:host=localhost;dbname=recipe_url';
const USERNAME = 'root';
const PASSWORD = 'Testtest991!';

try {
       function db_connect(){
        $dbh = new PDO(DSN,USERNAME, PASSWORD, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
        return $dbh;
    }
} catch (PDOException $e) {
    echo 'ERROR: Could not connect'.$e->getMessage();
}