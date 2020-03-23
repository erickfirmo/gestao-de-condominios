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
        $obj_lenght = count($obj_array);
        if($obj_lenght == 0)
            return $messages['zero'];
        else if($obj_lenght == 1)
            return replace('[X]', $obj_lenght, $messages['one']);
        else if ($obj_lenght > 1)
            return replace('[X]', $obj_lenght, $messages['many']);
    }
}