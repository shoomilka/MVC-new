<?php
require('header.php');

echo '<table class="table">';
foreach($tasks as $item){
    echo '<td><tr>' . $item->getTitle() . '</tr><tr>' . $item->getText() . '</tr></td>';
}
echo '</table>';
?>


<?php
require('footer.php');
?>