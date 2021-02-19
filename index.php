<?php
/**This function belongs to Khollinzx
 *  To run this application insert the entire folder into xampp/htdoc
 */

/**
 * This imports the RechargeCardPin Class
 */
require_once("RechargeCardPin.php");

/**
 * initializing the instance
 */
$airtime = new RechargeCardPin();

/**
 * generating the number of 
 */
$airtime->createCards(1, 200);
