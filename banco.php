<?php

date_default_timezone_set('America/Cuiaba');

        class Conexao {
        
            public static $online;
        
       
        
            public static function online(){
                if(!isset(self::$online)){
                    self::$online=new PDO("mysql:host=localhost;dbname=sistema_c", "root", "",
                        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'utf8'"));
                    self::$online->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
                }
                return(self::$online);
        
            }
        

      
    };   
?>