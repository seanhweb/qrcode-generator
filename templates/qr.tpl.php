<?php foreach($items as $key => $value):?>
    <?php if($value['name'] !== ''):?>
    <div class="qrCodeSingle">
        <p class="itemDesc"><?php print $items[$key]['name']; ?></p>
        <img src="<?php print $items[$key]['qr']; ?>" width=50>
        <p class="itemNum"><?php print $items[$key]['number']; ?></p>
    </div>
    <?php endif; ?>
<?php endforeach; ?>