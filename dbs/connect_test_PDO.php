<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 27.10.2016 г.
 * Time: 11:43 ч.
 */



try{
    $host = "localhost:3306"; // my localhosrt is on port 5555 , but mysql is on port 3306
    $dbname = "world";
    $dbh = new PDO("mysql:host=$host;dbname=$dbname","root","");
    echo "Connected to DB ! <br> \n";

    $sql = "select id , name from city limit 20"; //define a query

    $result = $dbh->query($sql); //execute the query

    foreach($result as $row){ //go trough the array
        print $row['id'] . " - " . $row['name'] . " <br> \n";
    }

}catch(PDOException $e){
    echo $e->getMessage();
}



?>