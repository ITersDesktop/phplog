# SETUP

From your terminal, 
* run `git clone` to copy this repo to your local working directory.
* start the server `php -s 0.0.0.0:[port-number]`. For example, `php -S 0.0.0.0:2021`.

If you clone the repo into your already established application server which are being used 
to run PHP based apps, you don't need to start the server as instructed above.

# HOW  TO LOG ERRORS TO FILES

Being consulted from the [thread](https://stackoverflow.com/questions/19898688/how-to-create-a-logfile-in-php/19898993), 
I simplify here how to log errors to files.

```
$data = array('shopid' => 3,'version' => 1, 'value' => 1);  //here $data is dummy variable

$log_file = $_SERVER['DOCUMENT_ROOT']."/errors-".date("Y-n-j").".log";

error_log(print_r($data,true), 3, $log_file);

// In $data we can mention the error message and create the log
    
``` 

Under the root directory of your PHP scripts, there is a log file named `errors-2021-11-18.log` which was 
created on 18/11/2021.