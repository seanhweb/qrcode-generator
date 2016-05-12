<?php echo '<div class="tag odd">';
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
					echo '</div></div>'; ?>