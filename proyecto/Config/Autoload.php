<?php
namespace Config;

class Autoload{

    public static function run() {
        sql_autoload_register(function($clase) {
            $ruta = ste_replace("\\","/",$clase) . ".php";
            //if (is_readable($ruta)) {
                include_once($ruta);
            //}
        });
    }

}
?>
