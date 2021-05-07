<?php


require 'vendor/autoload.php';
$client = new MongoDB\Client;

$db = $client -> db;

//$res = $db -> createCollection('collection1');

$collection = $db -> collection;
 
if($_POST){

   $insert = array(
       'firstname' => $_POST['firstname'],
       'lastname' => $_POST['lastname'],
       'phonenumber' => $_POST['phonenumber'],
       'email'  => $_POST['email'],
       'password' => $_POST['password']

   );
   if($collection-> insertone($insert)){
       echo "registered successfully";
   }
   else{
       echo "there are some errors";
   }
}
else{
    echo "no data";
}
?>