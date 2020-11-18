<?php
function ending($mounth) {
    switch ($mounth) {
        case 1:
            return ' ';
            break;
        case 2:
        case 3:
        case 4:
            return 'а';
            break;
        default:
            return 'ев';
            break;
    }
}
?>
