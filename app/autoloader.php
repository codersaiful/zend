<?php 
namespace App;

class Autoloader{
    public static function run(){
        spl_autoload_register([__CLASS__,'autoload']);
    }

    public static function autoload($class){
        // var_dump(__NAMESPACE__,$class,strpos(__NAMESPACE__,$class));
        if( 0 !== strpos($class,__NAMESPACE__) ) return;
        
        $filename = preg_replace(
            ['/\b' . __NAMESPACE__ . '/','/\\\/','/[_]/'], 
            ['','/','-'],
            $class
    );

        
        $filename = strtolower($filename);
        $filename = $filename . '.php';
        $file = str_replace('\\','/', __DIR__) . $filename;
        
        if( is_file( $file ) ){
            require_once $file;
        }
        
    }
}