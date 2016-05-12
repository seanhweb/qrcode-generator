<?php foreach($items as $key => $value):?>
<?php endforeach; ?>

<div class="qrCodeSingle">
    <p class="itemDesc"><?php print $item_name; ?></p>
    <img src="<?php print $qr_code;?>">
    <p class="itemNum"><?php print $number; ?></p>
</div>