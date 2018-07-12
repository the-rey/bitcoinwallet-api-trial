<html>
<head>
	<title>new address</title>
</head>
<body>
	
	<?php 

		$whitelist_ip = "";//kotakoin's ip or your ip
		$current_ip = $_SERVER['REMOTE_ADDR'];		

		if($current_ip != $whitelist_ip){die();}

		$wallet_ID = '';
		$password = '';
		$api_code = '';


	    $url = "http://localhost:3001/merchant/$wallet_ID/list?password=$password&api_code=$api_code";
	    
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