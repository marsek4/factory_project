<?php
    $word1 = $_POST['login'];
    if (strlen($word1) < 5 ) {
        echo "Both words are suitable";
    }
    else {
        echo "Логин подходит";
    }
?>