<?php
/**
 * Created by PhpStorm.
 * User: UntouchedDruid4
 * Date: 11/22/18
 * Time: 4:31 PM
 */

require('db_credentials.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
//if (!$db) {
//    die ('Failed to connect to MySQL: ' . mysqli_connect_error());
//}