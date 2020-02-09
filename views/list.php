<?php
require('header.php');
session_start();

foreach($tasks as $item){
    $color = 'white';
    $msg = '';
    $mark = '';
    if($item->isCompleted()){
        $color = 'silver';
        $msg = '<b>completed!</b>';
    }
    if(isset($_SESSION['username'])) if($_SESSION['username'] == 'admin'){
        if($msg == ''){
            $mark = '<a href="/index.php/completed/'.$item->getId() .'">Mark as completed</a>';
        }
    }
    
    echo '<div style="margin: 5px; background: '.$color.'; padding:10px;"><h3><p>'
        . $item->getName() . ' <small>'.$item->getEmail().' '.$msg . ' ' . $mark
        .'</small></p></h3><p>' . $item->getText() . '</p></div>';
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