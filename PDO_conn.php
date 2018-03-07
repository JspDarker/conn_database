<?php
/*
$host = "localhost";
$dbName = "raw";
$username = "root";
$password = "zxcv";
*/
/*
$dbConn = new PDO("mysql:host=" .$host. ";dbName=" . $dbName, $username, $password);
$dbConn = new PDO('mysql:host=localhost;dbname=raw','root','zxcv');
*/

/*
$dsn = 'mysql:host=localhost;dbname=raw;charset=UTF8';
$username = 'root';
$password = 'zxcv';

//$dbConn = new PDO($dsn,$username,$password);
//var_dump($dbConn);
try {
    $db_conn = new PDO('mysql:host=localhost;dbname=raw','root1','zxcv');
    // set the PDO error mode to exception
    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    die("ERROR : Can not connect " .$e->getMessage());
}
*/


try{

    $dbConnect = new PDO("mysql:host=localhost;dbname=raw",'root','zxcv');
    // var_dump($dbConnect);

}catch(PDOException $e){

    die("ERROR can not connect to ". $e->getMessage());

}

// Create and execute SELECT query
$sql = "SELECT * FROM users";
if($result = $dbConnect->query($sql)){
    while($row = $result->fetch()){
        echo $row[0]. " : " .$row[1]. "</br>";
    }
} else {
    echo "ERROR: could not execute $sql. " .print_r($dbConnect->errorInfo());
}

// close Connection
unset($dbConnect);