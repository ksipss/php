<?php
function template($__view, $__data)
    {
    // var_dump($__data);
   
// echo $background;
// echo $name;
// echo $text;

    ob_start();
    extract($__data);
    require $__view;

    $output = ob_get_clean();

    return $output;
    }

   