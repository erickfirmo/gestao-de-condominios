<?php



if(!function_exists('classActivePath'))
{
    function classActivePath($path, $activeClass, $n)
    {
        if($n != 0) {
            $i = 0;
            $final_path = '';
            $explode_path = explode('/', $_SERVER['REQUEST_URI']);
            while ($i != $n)
            {
                $i++;
                if(isset($explode_path[$i]))
                    $final_path .= '/'.$explode_path[$i];
            }
            if($path == $final_path)
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