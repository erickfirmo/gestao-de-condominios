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
        if($obj_array != null){
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
}

if(!function_exists('statusClass'))
{
    function statusClass($value)
    {
       switch ($value) {
            case 'Aberto':
                return 'label-success';
                break;
            case 'Fechado':
                return 'label-danger';
                break;
            case 'Em Manutenção':
                return 'label-warning';
                break;
           default:
                return 'label-light';
                break;
       }
    }
}

if(!function_exists('selectOption'))
{
    function selectOption($value_one, $value_two)
    {
       return ($value_one == $value_two) ? ' selected' : '';
    }
}

if(!function_exists('checkboxState'))
{
    function checkboxState($value_one, $value_two)
    {
       return ($value_one == $value_two) ? ' checked' : '';
    }
}


if(!function_exists('disabledInput'))
{
    function disabledInput($value_one, $value_two)
    {
       return ($value_one == $value_two) ? ' disabled' : '';
    }
}

