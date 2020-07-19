<?php
    class Form {
        public static function generate_row($name, $friendly_name, $has_text) {  
            include('templates/row.tpl.php'); 
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
            include('templates/tag.tpl.php'); 
        }
    }
?>