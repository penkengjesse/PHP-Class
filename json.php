<?php
/**
 * Created by PhpStorm.
 * User: yvtc
 * Date: 2017/11/9
 * Time: 上午 09:20
 */
include_once __DIR__."/vendor/autoload.php";
use Carbon\Carbon;

//echo Carbon::now()->toDateTimeString();

$a = [ "time" => Carbon::now()->toDateTimeString()];

echo json_encode($a);

?>