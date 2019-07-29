<?php

 $curl = curl_init();
 $i=0;
foreach (range('a','zz') as $char)
 {
    //echo $char . "\n";
  //echo "character=".$char;
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://www.trivago.in/search/in-IN-IN/v11_10_2_ac_cache/suggest_concepts?flags=3347&q='.$char,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0,
            ));
        $json=curl_exec($curl);


$json=json_decode($json,true);
foreach($json['result'] as $city)
{
$cityid=$city['id'];
$cityid=substr($cityid, 0,(strlen($cityid)-2));
$s=$city['tt'];
$sq=substr($s, 3,strlen($s));
$c=$char.$sq;
$city1=strtoupper($c);
$str = preg_replace("/[^A-Za-z0-9?! ]/","",$city1);
//echo 'city:'. $str .'   city id:'.$cityid.'<br>';
$i++;
}
//echo '<br><br>';
}
echo $i;
curl_close($curl);
?>