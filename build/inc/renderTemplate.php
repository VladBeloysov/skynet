<?php
function renderTemplate($__view, $__data) {
    extract($__data);
    ob_start();
    require $__view;
    $output = ob_get_clean();
    return print($output);
}
?>
