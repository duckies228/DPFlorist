<?php
session_start();
?>
    <?php
    unset($_SESSION['cart']);
    header('location: viewcart.php');
    ?>
    
      