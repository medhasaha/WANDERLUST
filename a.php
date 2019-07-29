<?php
include 'session.php'
?>
<!DOCTYPE HTML>
<!--
	Snapshot by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>WANDERLUST</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div class="page-wrap">


			<!-- Main -->
			 <?php
$s=$_POST['keyword'];
$s=strtolower($s);
$n=stripos($s,",");
if($n>0)
{
$city=substr($s, 0,$n);

	$cityfinal=$city.'-travel-guide';
}
//echo $cityfinal;

$curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://www.yatra.com/india-tourism/'.$cityfinal,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_SSL_VERIFYPEER => 0
        ));
            $html=curl_exec($curl);
            
            $dom = new DOMDocument();
            libxml_use_internal_errors(true);
            $dom->loadHTML($html);

            $xpath = new DOMXpath($dom);
             

            $title = $xpath->query('//div[@class="my-wrap p25-0 fs13 content conDiv lh25 fl"]');
            $heading=$xpath->query('//h2[@class="fs15 pb10 c435061 txt-cap borderBlue"]');
            
            $a=$xpath->query('//h1[@class="m10 fs22 txt-cap"]');
           // $b=$xpath->query('//span[@class="listHeading"]');
            ?>
           
				<section id="main">

				<!-- Banner -->
						<section id="banner">
							<div class="inner">
								<h1>
									<?php
										for($i=0;$i<$a->length;$i++)
            								{
                								$headline3=$a->item($i)->nodeValue;
            						 		}

            							echo strtoupper($headline3);
	       								echo "<br>";
	       							?>
	       							
								</h1>
								<p>Lets Xplore!!</p>
							</div>
						</section>

					<!-- Section -->
						<section>
							<div class="inner">
								<header>
									<h1>
									<?php
										for($i=0;$i<$heading->length;$i++)
            								{
                								$headline1=$heading->item($i)->nodeValue;
            						 		}

            							echo strtoupper($headline1);
	       								echo "<br>";
	       							?>
	       							
									</h1>
								</header>

								<p style="font-size: 20px;">
								<?php
								for($i=0;$i<$title->length;$i++)
            						{
                							$headline=$title->item($i)->nodeValue;
            						}

            					echo $headline;
	       						echo "<br>";

	       						curl_close($curl);
	       						?>
	       						</p>

	       						<!-- Gallery -->
						<section id="galleries">

							<!-- Photo Galleries -->
								<div class="gallery">

									<!-- Filters -->
										<header>
											<h1>Gallery</h1>
										</header>

										<div class="content">
										<?php 
										$new=$dom->getElementsByTagName("img");
							
							            for($i=0;$i<18;$i++)
            								{
                								$a=$new->item($i)->getAttribute("data-src");
                								//echo $i;
                								echo '<div class="media all people" >
												<a href="images/fulls/01.jpg"><img src='.$a.'></a>
											</div>'; 
            						 		}

										
											   
                						
                						?>
											
                						
											
										</div>
								</div>
						</section>
					
		</div>

<?php
include 'sidebar.php';
?>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>