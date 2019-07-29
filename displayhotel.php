<?php
include 'connect.php';
include 'hotel_function.php';
include 'session.php';
$city=$_POST['city'];

$city_id='';
$query = mysqli_query($conn,"SELECT * FROM city_id WHERE city_name ='$city'");
if(mysqli_num_rows($query)==1)
{
while($row=mysqli_fetch_array($query))
    {
     $city_id=$row['city_id'];
    } 
   
     $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://www.trivago.in/?iPathId='.$city_id,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0
        ));
            $html=curl_exec($curl);
            
            $dom = new DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($html);

            $xpath = new DOMXpath($dom);

            $title=$xpath->query('//h3[@class="name__copytext m-0 item__slideout-toggle"]');
            $rating=$xpath->query('//span[@class="rating-box__value"]');

            $img=$xpath->query('//img[@class="item__image item__image--has-gallery"]');
            $loc=$xpath->query('//span[@class="item__distance"]');
            // $price=$xpath->query('//strong[@class="deals__price"]');

             //$price=$xpath->query('//div[@itemprop="priceSpecification"]/@data-bestprice/text()');


            
            for($i=0;$i<$title->length;$i++) {
	    
	  
	    	 $image=$img->item($i)->getAttribute('src');
             if(substr($image, 0,4)!='data')
             {
                $price=rand(5000,10000);
	    $rate=$rating->item($i)->nodeValue;
	    $name=$title->item($i)->nodeValue;
       $location= $loc->item($i)->nodeValue;
       
       $l=rand(1,9).'.'.rand(1,9);
       $location=str_replace('0.0', $l, $location);
        displayhotel($city,$price,$rate/2,$image,$location,$name);	
   }}
curl_close($curl);
}
?>