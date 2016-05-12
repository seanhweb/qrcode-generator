<?php
    class Form {
        public static function generate_row($name, $friendly_name, $has_text) {  
            include('templates/row.tpl.php'); 
        }
    }


    class FS_Operation {
        public static function clear_tmp() {
            shell_exec('rm -rf '.getcwd().'/img/tmp/*'); 
        }
    }

?>