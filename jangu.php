<?php 
    
    require 'functions.php';
    
    $conn = connect();
    if(!$conn) die(header('location:404.php'));