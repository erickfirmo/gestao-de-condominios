<?php

$asp = "'";
echo "<script>\n";

    echo 'var errors_response = '.json_encode($errors->all()).';';
    
echo "</script>\n";