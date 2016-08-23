<?php
/**
 * Created by PhpStorm.
 * User: kevyn-yilmaz
 * Date: 8/23/16
 * Time: 1:07 PM
 */
include_once 'Database.php';

if(Database::connect())
    echo 'Ready to roll!!!';