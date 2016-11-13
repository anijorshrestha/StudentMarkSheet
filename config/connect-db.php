<?php
/**
 * Created by PhpStorm.
 * User: Sushant
 * Date: 11/13/2016
 * Time: 7:38 PM
 */



$server = 'localhost';
$username = 'root';
$pass = '';
$database = 'student_marksheet';

$connection = mysql_connect($server,$username, $pass)

or die ("Could not connect to server .....\n"  . mysql_error());

mysql_select_db($database)

or die ("Could not connect to database ....\n"  . mysql_error());




?>