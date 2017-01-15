<?php
/**
 * Created by PhpStorm.
 * User: Marek
 * Date: 24.10.2016 г.
 * Time: 17:46 ч.
 */

// $session_data contains a multi-dimensional array with session
// information for the current user.  We use serialize() to store
// it in a database at the end of the request.

$conn = odbc_connect("webdb", "php", "chicken");
$stmt = odbc_prepare($conn,
    "UPDATE sessions SET data = ? WHERE id = ?");
$sqldata = array (serialize($session_data), $_SERVER['PHP_AUTH_USER']);
if (!odbc_execute($stmt, $sqldata)) {
    $stmt = odbc_prepare($conn,
        "INSERT INTO sessions (id, data) VALUES(?, ?)");
    if (!odbc_execute($stmt, $sqldata)) {
        /* Something went wrong.. */
    }
}
//TODO: find a better example


?>

