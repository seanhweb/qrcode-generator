<?php
include "thirdparty/qrlib.php";
include "class.inc.php";
FS_Operation::clear_tmp(); 
?>

<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <title>
        <?php 
            echo 'Tag Generator- ' . $_POST['package_name'][0] . '';
        ?>
    </title>
</head>
<body>

<?php 
    foreach($_POST['items'] as $key => $value) {
        $filename = 'img/tmp/'.md5('test'.rand());
        if($value !== '') {
            QRcode::png($_POST['items_number'][$key], $filename,'L', min(max((int)4, 1), 10),2);
            $items[$key]['qr'] = $filename; 
        }
        $items[$key]['name'] = $value; 
        $items[$key]['number'] = $_POST['items_number'][$key];
    }
?>
<?php 
    new Tag(
        $_POST['package_name'][0], 
        $_POST['package_name_number'][0], 
        $_POST['serial_number'][0], 
        $_POST['edmc_number'][0],
        $items
    ); 
?>