<?php
    $message = "
<h2>Hello, I am a newbie with PHP programming. Please help me!!!</h2>";
    echo $message;

    $data = array('shopid' => 3,'version' => 1, 'value' => 1);  //here $data is dummy variable

    $log_file = $_SERVER['DOCUMENT_ROOT']."/errors-".date("Y-n-j").".log";

    error_log(print_r($data,true), 3, $log_file);

    // In $data we can mention the error message and create the log

?>