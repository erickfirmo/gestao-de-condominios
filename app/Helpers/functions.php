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
        // return replace('[X]', $obj_lenght, $messages['many']);
        switch(count($obj_array)) {
            case 0:
                return $messages['zero'];
                break;
            case 1:
                return str_replace('[X]', $obj_lenght, $messages['one']);

                break;
            default:
                return str_replace('[X]', $obj_lenght, $messages['many']);
                break;
        }
    }
}