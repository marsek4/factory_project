<?php
    $word4 = $_POST['word4'];

    if (preg_match('/^\d{10}$/', $word4)) {
        echo "Номер телефона введен верно";
    } else {
        echo "Номер телефона введен неверно";
    }
    
?>