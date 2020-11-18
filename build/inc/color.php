<?php
function color($name) {
   $name = mb_strtolower(explode(" ", $name)[0]);
   switch ($name) {
       case 'земля':
           return 'card__speed--brown';
           break;
       case 'вода':
           return 'card__speed--blue';
           break;
       case 'огонь':
           return 'card__speed--red';
           break;
   }
}
?>
