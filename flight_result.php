
<?php
include 'connect.php';
include 'session.php';
include 'flightfunction.php';
$cityarrival=$_POST["cityd"];
$citydeparture=$_POST["citya"];
$price=0;
$iataa="";
$iatad="";
$query1 = mysqli_query($conn,"SELECT * FROM flights_result WHERE city_name ='$cityarrival'");
$query2= mysqli_query($conn,"SELECT * FROM flights_result WHERE city_name ='$citydeparture'");
while($row=mysqli_fetch_array($query1))
    {
     $iataa=$row['iata'];
    }
 while($row=mysqli_fetch_array($query2))
    {
     $iatad=$row['iata'];
    }
    $tofrom=$iatad.'-'.$iataa;
    $url='https://www.expedia.co.in/Flights-Search?trip=oneway&leg1=from:'.$iataa.',to:'.$iatad.',departure:24/11/2017TANYT&passengers=children:0,adults:1,seniors:0,infantinlap:Y&mode=search';
    
     $curl = curl_init();
             curl_setopt_array($curl, array(
             CURLOPT_RETURNTRANSFER => 1,
             CURLOPT_URL => $url,
             CURLOPT_USERAGENT => 'Codular Sample cURL Request',
             CURLOPT_SSL_VERIFYPEER => 0
         ));


             $html=curl_exec($curl);
            
            $dom = new DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($html);
            $xpath = new DOMXpath($dom);
            $departure=$xpath->query('//span[@class="departure-time departure-0-emphasis"]');
            $arrival=$xpath->query('//span[@class="arrival-time arrival-0-emphasis"]');
            $price2=$xpath->query('//span[@class="suffix-symbol price-emphasis"]');
            $price1=$xpath->query('//span[@class="cents secondary price-emphasis"]');
            $duration=$xpath->query('//div[@class="primary duration-emphasis"]');
            $name=$xpath->query('//div[@class="secondary truncate"]');
             //echo $price1->item($i)->nodeValue.','.$price->item($i)->nodeValue
            for($i=0;$i<$departure->length;$i++) {
            $dur= $duration->item($i)->nodeValue."  ";

	     $arr= $departure->item($i)->nodeValue."  ";
        $dep= $arrival->item($i)->nodeValue." " ;
        @$price= $price1->item($i)->nodeValue.$price2->item($i)->nodeValue;
        $nam=$name->item($i)->nodeValue;
        if($price==0)
        {
            $price=rand(3000,8000);
        }

	    displayflight($nam,$tofrom,$dep,$arr,$dur,$price);


    
}
 curl_close($curl);

       
   
?>