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
				include('tagprocess.php');
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
			
			
			else {
					include('tagprocess.php');																			
					}

