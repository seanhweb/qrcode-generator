<html>
<head>
<link type="text/javascript" rel="stylesheet" href="css/style.css">
<title>
<?php 
$packageName = $_POST['packageName']; 
$packageNumber = $_POST['packageNumber']; 
echo 'Tag Generator- ' . $packageName . '';
?>
</title>
</head>

<?php 

/*/////////////////////////////////
/////////////////////////////////

 Define Variables from Form 

/////////////////////////////////
///////////////////////////////*/

$packageName = $_POST['packageName']; 
$packageNumber = $_POST['packageNumber']; 
$serialNumber = $_POST['serialNumber'];
$edmcNumber = $_POST['edmcNumber'];
$itemName1 = $_POST['itemName1']; 
$itemName2 = $_POST['itemName2']; 
$itemName3 = $_POST['itemName3']; 
$itemName4 = $_POST['itemName4'];
$itemName5 = $_POST['itemName5'];
$itemName6 = $_POST['itemName6'];
$itemName7 = $_POST['itemName7'];
$itemName8 = $_POST['itemName8'];
$itemName9 = $_POST['itemName9'];
$itemName10 = $_POST['itemName10'];
$itemNumber1 = $_POST['itemNumber1'];
$itemNumber2 = $_POST['itemNumber2']; 
$itemNumber3 = $_POST['itemNumber3'];  
$itemNumber4 = $_POST['itemNumber4']; 
$itemNumber5 = $_POST['itemNumber5']; 
$itemNumber6 = $_POST['itemNumber6']; 
$itemNumber7 = $_POST['itemNumber7']; 
$itemNumber8 = $_POST['itemNumber8']; 
$itemNumber9 = $_POST['itemNumber9']; 
$itemNumber10 = $_POST['itemNumber10']; 
echo '<div id="page">';

/*/////////////////////////////////
/////////////////////////////////

 Code for if "Make 10" is checked
 
 /////////////////////////////////
///////////////////////////////*/

			if(isset($_POST['autoGenerate'])) {
			for ($x=0; $x<=9; $x++) {
				echo '<div class="tag odd">';
				echo '<div class="tagInfoLeft">';
				echo '<h2>' . $packageName . ' # '. $packageNumber .'</h2>';
				echo '<p>Content Items</p>';
				echo '</div>';
				if (empty($_POST['edmcNumber']) & empty($_POST['serialNumber'])) {
					//do not generate EDMC and Serial Number Information
				}
				else {
					echo   '<div class="tagInfoRight">
							<p><b>Serial</b></p>	
							<p>'. $serialNumber .'</p>
							<p><b>Edmc Tag</b></p>
							<P>'. $edmcNumber . '</P>
						</div>';
				}
				echo	'<div class="clear">
						</div>';
				echo '	<div class="qrCodeBox">';
				if(isset($_POST['packageCode']))  {
				echo '  <div class="qrCodeSingle">
								<p> '. $packageName .' </p>
									<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl=' . $packageName .  '%20%23' . $packageNumber . '&chs=50x50&cht=qr&chld=H%7C0"></iframe>
								<p class="itemNum">'. $packageName .' # '. $packageNumber . '</p>
							</div>';
				}
				switch ($itemName2) {
							case isset($_POST['itemName1']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName1 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber2 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber1 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName1']):
							//do nothing
							break;		
						}	
							switch ($itemName2) {
							case isset($_POST['itemName2']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName2 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber2 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber2 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName2']):
							//do nothing
							break;		
						}
						
						switch ($itemName3) {
							case isset($_POST['itemName3']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName3 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber3 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber3 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName3']):
							//do nothing
							break;		
						}	
						switch ($itemName4) {
							case isset($_POST['itemName4']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName4 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber4 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber4 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName4']):
							//do nothing
							break;		
						}	
						switch ($itemName5) {
							case isset($_POST['itemName5']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName5 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber5 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber5 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName5']):
							//do nothing
							break;		
						}	
						switch ($itemName6) {
							case isset($_POST['itemName6']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName6 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber6 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber6 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName6']):
							//do nothing
							break;			
						}
						switch ($itemName7) {
							case isset($_POST['itemName7']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName7 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber7 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber7 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName7']):
							//do nothing
							break;			
						}
						switch ($itemName8) {
							case isset($_POST['itemName8']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName8 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber8 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber8 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName8']):
							//do nothing
							break;			
						}
						switch ($itemName9) {
							case isset($_POST['itemName9']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName9 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber9 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber9 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName9']):
							//do nothing
							break;			
						}
						switch ($itemName10) {
							case isset($_POST['itemName10']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName10 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber10 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber10 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName10']):
							//do nothing
							break;			
						}																																						
					echo '</div></div>';
					$itemNumber1++;
					$itemNumber2++;
					$itemNumber3++;
					$itemNumber4++;
					$itemNumber5++;
					$itemNumber6++;
					$itemNumber7++;	
					$itemNumber8++;
					$itemNumber9++;				
					$itemNumber10++;																						
					$packageNumber++;
				  } 
			}

/*/////////////////////////////////
/////////////////////////////////

 Code for a single tag
 
 /////////////////////////////////
///////////////////////////////*/

			/////////////////////////
			//Tag information up/////
			//to the first item//////
			/////////////////////////
			
			
			else {
					echo '<div class="tag odd">';
					echo '<div class="tagInfoLeft">';
					echo '<h2>' . $packageName . ' # '. $packageNumber .'</h2>';
					echo '<p>Content Items</p>';
					echo '</div>';
					if (empty($_POST['edmcNumber']) & empty($_POST['serialNumber'])) {
						//do not generate EDMC and Serial Number Information
					}
					else {
						echo   '<div class="tagInfoRight">
								<p><b>Serial</b></p>	
								<p>'. $serialNumber .'</p>
								<p><b>Edmc Tag</b></p>
								<P>'. $edmcNumber . '</P>
							</div>';
					}
					echo '<div class="clear">
							</div>';
					echo '	<div class="qrCodeBox">';
					if(isset($_POST['packageCode'])) {
							echo '	<div class="qrCodeSingle">
									<p> '. $packageName .'</p>
									<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl=' . $packageName .  '%20%23' . $packageNumber . '&chs=50x50&cht=qr&chld=H%7C0"></iframe>
									<p class="itemNum">'. $packageName .' # '. $packageNumber . '</p>
									</div>';
					}
					switch ($itemName1) {
							case isset($_POST['itemName1']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName1 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber2 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber1 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName1']):
							//do nothing
							break;		
						}
						
					if (empty($_POST['itemName2']) && empty($_POST['itemName3'])) {
						//do not generate EDMC and Serial Number Information
					}
		
		
					////////////////////////////		
					
					//////Switch statements 
					//////for if item names
					//////are empty
					
					/////////////////////////		
									
						switch ($itemName2) {
							case isset($_POST['itemName2']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName2 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber2 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber2 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName2']):
							//do nothing
							break;		
						}
						
						switch ($itemName3) {
							case isset($_POST['itemName3']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName3 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber3 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber3 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName3']):
							//do nothing
							break;		
						}	
						switch ($itemName4) {
							case isset($_POST['itemName4']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName4 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber4 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber4 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName4']):
							//do nothing
							break;		
						}	
						switch ($itemName5) {
							case isset($_POST['itemName5']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName5 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber5 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber5 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName5']):
							//do nothing
							break;		
						}	
						switch ($itemName6) {
							case isset($_POST['itemName6']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName6 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber6 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber6 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName6']):
							//do nothing
							break;		
						}
						switch ($itemName7) {
							case isset($_POST['itemName7']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName7 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber7 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber7 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName7']):
							//do nothing
							break;			
						}
						switch ($itemName8) {
							case isset($_POST['itemName8']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName8 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber8 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber8 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName8']):
							//do nothing
							break;			
						}
						switch ($itemName9) {
							case isset($_POST['itemName9']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName9 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber9 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber9 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName9']):
							//do nothing
							break;			
						}
						switch ($itemName10) {
							case isset($_POST['itemName10']):
							echo			'<div class="qrCodeSingle">
											<p class="itemDesc">'. $itemName10 .'</p>
											<iframe scrolling="no" src="http://chart.apis.google.com/chart?chl='. $itemNumber10 .'&chs=50x50&cht=qr&chld=H%7C0"></iframe>
											<p class="itemNum">'. $itemNumber10 .'</p>
											</div>';
							break;
							
							case empty($_POST['itemName10']):
							//do nothing
							break;			
						}																								
					}

