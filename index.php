<?php
    Class Magic 
    {               
        function __construct() {
            echo "я создан </br>";
        }
        
        function __clone()
        {
            echo "я клонирован</br>";
        }
            
        function __get($name)
        {
            echo "у меня запросили название переменной</br>";
        }
        
        function __call($name, $arguments)
        {
            echo "у меня вызвали название метода</br>";
        }
        
        function __toString()
        {		
            return __CLASS__;
        }
                       
    }

    $mag = new Magic();
    $magClon = clone $mag; 
    $mag->per;
    $mag->myMethod();
    echo $mag;
    
    
?>