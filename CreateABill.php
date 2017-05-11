<?php
/*
 * This file shows how to Create A Bill using Billplz class
 * The commented line is Optional parameter
 * 
 */



$amount = $_GET['amount'];
$name = $_GET['name'];




require 'billplz.php';
$api_key = '73eb57f0-7d4e-42b9-a544-aeac6e4b0f81';
$a = new Billplz;
$a->setName("Osman Jailani");
$a->setAmount($amount);
$a->setEmail('solehinjr@gmail.com');
$a->setDescription("Kedai kasut murah woi");
$a->setPassbackURL('http://callback-url.com', 'http://redirect-url.com');
//$a->setCollection('collect_id');
//$a->setPassbackURL('http://callback-url.com');
$a->setReference_1_Label('Item To Buy');
$a->setReference_1($name);

$a->setMobile('999');
//$a->setDeliver('0'); //No Notification
//$a->setDeliver('1'); //Email Notification
//$a->setDeliver('2'); //SMS Notification
//$a->setDeliver('3'); //Email & SMS Notification
//$a->create_bill($api_key, true);
$a->create_bill($api_key);
//echo $a->getURL();
header('Location: ' .$a->getURL());