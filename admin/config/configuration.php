
<?php

if(!function_exists('url'))

{
    function url($path='')
    {
        $path=trim('/',$path);
        return $_SERVER['SERVER_NAME'].'/'.$path ;
    
    }
}

echo"<pre>";
print_r(($_SERVER));
?>