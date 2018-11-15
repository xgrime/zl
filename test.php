<?php
	// Created by: Fico Pangestu
	// Not For Sale
	function yogo($deviceCode, $deviceId, $sign, $imei, $tk, $token, $uuid, $jumlah, $wait){
	    $x = 0; 
	    while($x < $jumlah) {
			
	$body = ' deviceCode ='.$deviceCode.'&deviceId ='.$deviceId.'&sign='.$sign.'&imei='.$imei.'&tk='.$tk.'&token='.$token.'&uuid='.$uuid.'';
					
	        $ch = curl_init();
	        curl_setopt($ch, CURLOPT_URL,"https://api.yogopro.com/api/reward/watchVideo/$rand");
	        curl_setopt($ch, CURLOPT_POST, 1);
	        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	        $server_output = curl_exec ($ch);
	        curl_close ($ch);
			echo $server_output."\n";
	        sleep($wait);
	        $x++;
	        flush();
	    }
	}
	print "
	\033[32m##############################################################################\033[0m
				    \033[32mTuyul coin YogoVideo\033[32m
	\033[32m##############################################################################\033[0m";
	echo "\n\ndeviceCode: ";
	$deviceCode = trim(fgets(STDIN));
	echo "DeviceId: ";
	$deviceId = trim(fgets(STDIN));
	echo "Imei: ";	
	$imei = trim(fgets(STDIN));
	echo "Sign: ";	
	$sign = trim(fgets(STDIN));	
	echo "tk: ";
	$tk = trim(fgets(STDIN));
	echo "Token: ";
	$token = trim(fgets(STDIN));
	echo "UUID: ";
	$uuid = trim(fgets(STDIN));
	echo "Jumlah: ";
	$jumlah = trim(fgets(STDIN));
	echo "Jeda? 0-9999999999 (ex:60): ";
	$wait = trim(fgets(STDIN));
	$execute = yogo($deviceCode, $deviceId, $sign, $imei, $tk, $token, $uuid, $jumlah, $wait);
	print $execute;
	print "DONE\n";
	?>
