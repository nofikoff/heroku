<?php


$host = 'ao9moanwus0rjiex.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$user = 'rrviv2y12kyhwtif';
$pass = 'ovm6fcv37uw7jegl';
$database = 'xatyg46eid2n3xve';

//Custom PDO options.
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
];

//Connect to MySQL and instantiate our PDO object.
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass, $options);


//Create our INSERT SQL query.
$sql = "SELECT * FROM `test_table` WHERE id = ".$_GET['id'];

foreach($pdo->query($sql, PDO::FETCH_ASSOC) as $row){
   echo json_encode($row);
}

//Because PDOStatement::execute returns a TRUE or FALSE value,
//we can easily check to see if our insert was successful.


