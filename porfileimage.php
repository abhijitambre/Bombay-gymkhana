<?php 
		$jsonfields = file_get_contents('php://input');
		echo $jsonfields;
		$requestdata = json_decode($jsonfields, true);
		$Clientid1 = $requestdata['clientid1'];
		$Clientid2 = $requestdata['clientid2'];
		$Clientid3 = $requestdata['clientid3'];
		$uniqid = $requestdata['uniqid'];
		setcookie('Clientid1', $Clientid1);
		setcookie('Clientid2', $Clientid2);
		setcookie('Clientid3', $Clientid3);
		setcookie('uniqid', $uniqid);
		$fullid = $Clientid1."-".$Clientid2."   ".$Clientid3;
		setcookie('fullid', $fullid);
		$userid = $requestdata['fullid'];
		$fullid = $_COOKIE['fullid'];
        $PHOTOPATH = $requestdata['PHOTOPATH'];
		setcookie('PHOTOPATH', $PHOTOPATH);
		$PHOTOPATH = $requestdata['PHOTOPATH'];
		echo $fullid;
        echo $PHOTOPATH;
	?>