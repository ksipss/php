<?php
function template($__view, $__data)
    {
    ob_start();
    extract($__data, EXTR_OVERWRITE, '');
    require $__view;

    $output = ob_get_clean();
    
    return $output;
    }

   