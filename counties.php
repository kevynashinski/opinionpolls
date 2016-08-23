<?php
/**
 * Created by PhpStorm.
 * User: kevyn-yilmaz
 * Date: 8/23/16
 * Time: 1:14 PM
 */

include_once 'Database.php';
include_once 'constants.php';

$conn = Database::connect();

$sql = "select * from counties";

$array = array();

foreach ($conn->query($sql) as $row) {
    array_push($array,$row[COUNTY_NAME]);
}

echo json_encode($array);

Database::disconnect();