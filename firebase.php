
<?php
error_reporting(E_ALL & ~E_DEPRECATED);
require('./vendor/autoload.php');

use Kreait\Firebase\Factory;

// Create Firebase instance
$factory = (new Factory)
    ->withServiceAccount('phps-52e08-firebase-adminsdk-fbsvc-3da26e3d85.json')
    ->withDatabaseUri('https://phps-52e08-default-rtdb.asia-southeast1.firebasedatabase.app/'); // Replace with your DB URL
// use this acces to ey kor ban with database (in file display data)
$database = $factory->createDatabase();
?>




