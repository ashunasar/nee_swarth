<?php
include 'init.php';

if (isset($_POST['request'])){

    if($_POST['request'] == 'showHeaderProducts'){
      $adminView->showHeaderProducts();
    }
    
    if($_POST['request'] == 'showCrousalImages'){
      $adminView->showCrousalImages();
    }
    
}