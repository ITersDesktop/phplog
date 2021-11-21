<?php
use \Datetime;

$message = "
<h2>Hello, I am a newbie with PHP programming. Please help me!!!</h2>
<p>See the log file has been newly created un the root directory of this file.</p>
";
echo $message;

$data = array('shopid' => 3,'version' => 1, 'value' => 2);  //here $data is dummy variable
$log_file = $_SERVER['DOCUMENT_ROOT']."/errors-".date("Y-n-j").".log";
date_default_timezone_set('Europe/London');
$date = date('m/d/Y H:i:s', time());
$error_message = "[".$date."] DEBUG: ".json_encode($data)."\n";

error_log(print_r($error_message,true), 3, $log_file);

// In $data we can mention the error message and create the log