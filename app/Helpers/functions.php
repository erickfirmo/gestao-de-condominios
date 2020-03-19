<?php



if(!function_exists('classActiveUrl'))
{
    function classActiveUrl($path, $activeClass)
    {
        if($n != 0) {
            $i = 0;
            $explode_path = explode('/', $_SERVER['REQUEST_URI']);
        
            if($path == $explode_path[1])
                echo " $activeClass";
    
        } else {
            if($_SERVER['REQUEST_URI'] == $path)
                echo " $activeClass";
        }
    }
}

if(!function_exists('countMessage'))
{
    function countMessage($obj_array, $messages)
    {
        if(count($obj_array) == 0)
            return $messages['zero'];
        else if(count($obj_array) == 1)
            return $messages['one'];
        else if (count($obj_array))
            return replace('[X]', count($obj_array), $messages['many']);
        
    }
}