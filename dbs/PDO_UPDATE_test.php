<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 31.10.2016 г.
 * Time: 12:49 ч.
 */

try{
    $host="localhost:3306";
    $dbname="world";
    $dbh = new PDO("mysql:host=$host;dbname=$dbname","root","");

    echo"Connected to DB! <br> \n";


    $testcity ="Samovodene_2";
    $sql_bef = "SELECT id , name , population FROM city WHERE name='$testcity'";

    $bef = $dbh->query($sql_bef);


    foreach($bef as $row){
        echo "Old: ".$row['id']." - ".$row['name']. " - " . $row['population'] . " <br> \n";
    }



    $sql ="UPDATE city SET name = :newName WHERE name = :oldName";

    $statement= $dbh->prepare($sql);

    $oldName = "Samovodene_2";
    $newName = "Kokoshevo";

    $statement->bindParam(':oldName',$oldName,PDO::PARAM_STR);
    $statement->bindParam(':newName',$newName,PDO::PARAM_STR);

    $statement->execute();

    $sql_aft="SELECT id , name , population FROM city WHERE name='$newName'";
    $aft = $dbh->query($sql_aft);

    foreach($aft as $row){
        echo "New: ".$row['id']." - ".$row['name']. " - " . $row['population'] . " <br> \n";
    }

    /* if you want to fetch only 1 row :
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    echo $row['Name']." - ".$row['Population'];
     */

}
catch(PDOException $e){
    echo $e->getMessage();
}

?>