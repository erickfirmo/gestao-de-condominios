<?php
$asp = "'";
$errors_response = [];
echo "<script>\n";
    foreach($errors->all() as $key => $error){
        $errors_response[$errors->keys()[$key]] = $error;
    }
    echo "var errors_response = ".json_encode($errors_response).";\n";
    echo "var success_response = '".session()->get('success')."';\n";
    
echo "</script>\n";