<!doctype html>
<html>
<head>
<link rel="icon" 
      type="image/jpeg" 
      href="logo.jpg">
<script type="text/javascript" src="js/jquery-1.10.2.min.js">
</script>
<script type="text/javascript" src="js/visuals.js">
</script>
<link rel="stylesheet" type="text/css" href="css/header_style.css">
<meta charset="utf-8">
<title>Tag Generator</title>
</head>

<body>

<div id="mainForm">

    <div id="ailogo">
    </div>
    <div class="formInfo">
    <p>Package Name</p>
    <p>Serial Number</p>
    <p>Item 1</p>
    <p>Item 2</p>
    <p>Item 3</p>
    <p>Item 4</p>
    <p>Item 5</p>
    <p>Item 6</p>
    <p>Item 7</p>
	<p>Item 8</p>
	<p>Item 9</p>
	<p>Item 10</p>
    <p>Item 11</p>
    <p>Item 12</p>
    <p>Auto Generate</p>
    <p style="font-size:9px;"># To Make</p>
    <p>Package Tag Enabled</p>
    
    </div>
    <div class="formElements">
        <form name="qr-generator"  action="tag.php" method="post" >
        <label>
        <input type="text" name= "packageName" class="nameInput" id="packageName">	#<input type="text" name="packageNumber" id="packageNumber" class="numberInput">
        </label>
        <br /> 
		<input type="text" name= "serialNumber" class="serialInput" >EDMC #<input type="text" name="edmcNumber" class="edmcInput" >
        <br /> 
        <input type="text" name="itemName1" class="nameInput">#<input type="text" name="itemNumber1" class="numberInput">
        <br />
		<input type="text" name="itemName2" class="nameInput">#<input type="text" name="itemNumber2" class="numberInput" >
        <br />
        <input type="text" name="itemName3" class="nameInput">#<input type="text" name="itemNumber3" class="numberInput" >
        <br />
       <input type="text" name="itemName4" class="nameInput">#<input type="text" name="itemNumber4" class="numberInput" >
        <br />
		<input type="text" name="itemName5" class="nameInput">#<input type="text" name="itemNumber5" class="numberInput" >        
        <br />
		<input type="text" name="itemName6" class="nameInput">#<input type="text" name="itemNumber6" class="numberInput" >
        <br />
        <input type="text" name="itemName7" class="nameInput">#<input type="text" name="itemNumber7" class="numberInput" >
        <br />
        <input type="text" name="itemName8" class="nameInput">#<input type="text" name="itemNumber8" class="numberInput" >
        <br />
        <input type="text" name="itemName9" class="nameInput">#<input type="text" name="itemNumber9" class="numberInput" >
        <br />
		<input type="text" name="itemName10" class="nameInput">#<input type="text" name="itemNumber10" class="numberInput">			
        <br /> 		      
        <input type="text" name="itemName11" class="nameInput">#<input type="text" name="itemNumber11" class="numberInput">
 		<br />
        <input type="text" name="itemName12" class="nameInput">#<input type="text" name="itemNumber12" class="numberInput">
        <br />
        <input type="checkbox" id="autoGenerate" name="autoGenerate">
        <br />
        <br />
        <input type="text" id="loopNumber" name="loopNumber" value="10">
        <br />
        <br />
        <input type="checkbox" id="packageCode" name="packageCode">
        <br />
        <br	/>
        <input type="reset" id="resetBTN">
    	<input type="submit" id="submitBTN">
        </form>
    <div class="clear">
    </div>
    
</div>


</body>
</html>
