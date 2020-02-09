<?php
require('header.php');

foreach($tasks as $item){
    echo '<div style="margin: 5px; background: white; padding:10px;"><h3><p>'
        . $item->getTitle() . '</p></h3><p>' . $item->getText() . '</p></div>';
}
?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
  <?php
        for($i=1; $i <= $count; $i++){
            echo '<li class="page-item"><a class="page-link" href="/index.php/list/'.$i.'">'. $i .'</a></li>';
        }
  ?>
  </ul>
</nav>

<?php
require('footer.php');
?>