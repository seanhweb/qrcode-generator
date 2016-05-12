<div class="tag odd">
    <div class="tagInfoLeft">
        <h2><?php print $package_name; ?> - # <?php print $package_number; ?></h2>  
    </div>
    <div class="tagInfoRight">
        <p><b>Serial</b></p>
        <p><?php print $serial_number; ?></p>
        <p><b>EDMC</b></p>
        <p><?php print $edmc; ?></p>
    </div>
    <p>Content Items</p>
    <?php include('templates/qr.tpl.php'); ?>
</div>