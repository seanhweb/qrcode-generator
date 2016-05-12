<!doctype html>
<?php include('class.inc.php'); ?>
<html>
<head>
<link rel="icon" 
      type="image/jpeg" 
      href="logo.jpg">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/header_style.css">
<meta charset="utf-8">
<title>Tag Generator</title>
</head>

<body>

<div id="mainForm">
    <div id="ailogo"></div>
    <form name="tagForm" action="tag.php">
        <?php
            Form::generate_row('package_name', 'Package Name', 1);
            Form::generate_row('serial', 'Serial Number', 0);
            Form::generate_row('edmc', 'Edmc Number', 0);
        ?>
        <hr>
        <?php for($x=1;$x<10;$x++): ?>
            <?php Form::generate_row('item_'.$x, 'Item '.$x, 1); ?>
        <?php endfor; ?>
            <input type="submit" id="submitBTN">
    </form>
</div>


</body>
</html>
