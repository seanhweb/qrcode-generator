
<div class="form-item">
    <label for="<?php print $name;?>"><?php print $friendly_name;?></label>
    <div class="inputs">
        <?php if($has_text == 1):?>
            <input type="text" name="<?php print $name;?>[]" class="name">  
        <?php endif; ?>
            <span class="hash">#</span>
            <input type="text" name="<?php print $name.'_number[]';?>" class="number">  
    </div>
</div>