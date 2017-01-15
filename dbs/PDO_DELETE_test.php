<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 31.10.2016 г.
 * Time: 13:44 ч.
 */

try{

    $host="localhost:3306";
    $dbname="world";

    $con = new PDO("mysql:host=$host;dbname=$dbname","root","");

    echo "Connected to DB <br> \n";

    $sql_bef = "SELECT id , name FROM city WHERE name='Kokoshevo'";

    $bef= $con->query($sql_bef);


    $checkIfEmpty = $bef->rowCount(); // we check if the query found result

    if($checkIfEmpty > 0){
        foreach($bef as $row){
            echo "Data to be deleted: ".$row['id']." - ".$row['name']." <br> \n";
        }
    }else{
        echo "The data you want to delete , has already been deleted!";
        die();
    }



    $sql_del = "DELETE FROM city WHERE name = :name";
    $del_city = "Kokoshevo";

    $statement = $con->prepare($sql_del);
    $statement->bindParam(':name',$del_city,PDO::PARAM_STR);
    $statement->execute();

    $sql_aft = "SELECT id , name FROM city WHERE name='$del_city'";
    $aft = $con->query($sql_aft);

    if(!$aft->rowCount() > 0){
        foreach($bef as $row){
            echo "Data has not been deleted: ".$row['id']." - ".$row['name']." <br> \n";
        }
    }else{
        echo "The deleting has been completed ! There is no data with the name $del_city in this DB!";
    }


}
catch(PDOException $e){
    $e->getMessage();
}

?>