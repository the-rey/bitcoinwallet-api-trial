<html>
<head>
	<title>new address</title>
</head>
<body>
	
	<?php 

		$whitelist_ip = "123.254.239.134";//kotakoin's ip or your ip
		$current_ip = $_SERVER['REMOTE_ADDR'];		

		//if($current_ip != $whitelist_ip){die();} for testing purposes this will not be used

		$wallet_ID = "";
		$password = "";
		$api_code = "8bf83737-7b99-4451-89db-b7da3024c011";
		$label = $_GET['label'];

	    $url = "http://localhost:3001/merchant/$wallet_ID/new_address?password=$password&label=$label";
    	
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_URL, $url);    

	    $ccc = curl_exec($ch);
	    $json = json_decode($ccc,true);

	    echo "<pre>";
	    var_dump($json);
	    echo "</pre>";


	 ?>
</body>
</html>