<?php
/**
 * Created by PhpStorm.
 * User: yvtc
 * Date: 2017/11/3
 * Time: 上午 08:32
 */
include_once __DIR__."/vendor/autoload.php";
use Carbon\Carbon;
printf("Right now is %s", Carbon::now()->toDateTimeString());