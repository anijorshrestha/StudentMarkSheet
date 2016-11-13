<?php
/**
 * Created by PhpStorm.
 * User: Sushant
 * Date: 11/13/2016
 * Time: 9:49 PM
 */


include ('../../config/connect-db.php');

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $result = mysql_query("delete from subject where id = $id")

    or die(mysql_error());

    header("Location: view.php");
}