<?php
include 'connect.php';
 $curl = curl_init();
  curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://gist.githubusercontent.com/tdreyno/4278655/raw/7b0762c09b519f40397e4c3e100b097d861f5588/airports.json',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0,
            ));
 $json=curl_exec($curl);


$json=json_decode($json,true);
foreach($json as $air)
{
	if($air['country']=='India')
	{
		$city=$air['city'];
		$code=$air['code'];
		$sql="INSERT INTO`flights_result`(`city_name`,`iata`)VALUES('$city','$code')";
		$var = mysqli_query($conn,$sql);


	}
}
?>