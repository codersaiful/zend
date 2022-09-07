<?php 
namespace Saiful;

use Saiful\App\DB;

require 'app/db.php';
$db = DB::getInstance();
$users = $db->query( "SELECT * FROM users" ); // WHERE ID = 5 //  WHERE ID = 90
$all_fetch = $db->fetchAll($users);
var_dump($all_fetch);
