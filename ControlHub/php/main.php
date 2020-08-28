<?php
	
	$email = "";
	$pass = "";	
	$loged = true;
	
	$email = !empty($_POST['email']) ? $_POST['email'] : '';
	$pass = !empty($_POST['password']) ? $_POST['password'] : '';
	
	if(md5($pass) == "e10adc3949ba59abbe56e057f20f883e" && $email == "lorin.pobel@gmail.com"){
		$loged = true;
	}
	
	// <script>console.log($available);</script>
	// $available = true;
	$available = !empty($_POST["available"]) ? $_POST["available"] : "";
	
	// $debug = shell_exec('C:\Python27 C:\Users\lobel\Documents\Web\Radni\debug\debug.py' . $available);
	
	// echo('<script src="\ControlHub\scripts\settings.js" type="javascript">setup()</script>');
	function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
	}
	
	console_log($available);

?>
