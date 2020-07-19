<?php
    class Form {
        public static function generate_row($name, $friendly_name, $has_text) {  
            ?>
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
            <?
        }
    }

    class FS_Operation {
        public static function clear_tmp() {
            $files = glob(__DIR__.'/img/tmp/*');
            foreach($files as $file) { 
                if(is_file($file)) {
                  unlink($file);
                }
            }
        }
    }

    class Tag {
        public function __construct($package_name, $package_number, $serial_number, $edmc, $items)  {
            ?>
            <div class="tag odd">
                <div class="tagInfoLeft">
                    <h2><?php print $package_name; ?> - # <?php print $package_number; ?></h2>
                        <p>Content Items:</p>
                        <?php foreach($items as $key => $value):?>
                            <?php if($value['name'] !== ''):?>
                            <div class="qrCodeSingle">
                                <p class="itemDesc"><?php print $items[$key]['name']; ?></p>
                                <img src="<?php print $items[$key]['qr']; ?>" width=50>
                                <p class="itemNum"><?php print $items[$key]['number']; ?></p>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; ?>                           
                </div>
                <div class="tagInfoRight">
                    <p><b>Serial</b></p>
                        <p><?php print $serial_number; ?></p>
                    <p><b>EDMC</b></p>
                    <p><?php print $edmc; ?></p>
                </div>
            </div>
            <?
        }
    }
?>