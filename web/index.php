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
$sql = "INSERT INTO `test_table` (`id`, `name`, `phone`, `email`) VALUES (NULL, :name, :phone, :email);";

//Prepare our statement.
$statement = $pdo->prepare($sql);
//Bind our values to our parameters (we called them :make and :model).
$statement->bindValue(':name', 'ПЕТЯ');
$statement->bindValue(':phone', '22222');
$statement->bindValue(':email', 'xxxxxxx');

try {
//Execute the statement and insert our values.
    $inserted = $statement->execute();

} catch (Exception $exception) {

    if ($exception->getCode() == 23000) {
        echo "Такая запись уже есть";

    } else print_r($exception);

}


//Because PDOStatement::execute returns a TRUE or FALSE value,
//we can easily check to see if our insert was successful.
if ($inserted) {
    echo 'Row inserted!<br>';
}


