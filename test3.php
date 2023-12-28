<?php

//$word1 = $_POST['word1'];
$word2 = $_POST['word2'];
$word3 = $_POST['word3'];
if ($word3 == $word2) {
    echo "Пароли совпадают";
//} elseif (strlen($word1) > 5 || strlen($word2) > 5) {
  //  echo "One of the words is suitable";
} else {
    echo $word2;
    echo $word3;
    echo "Пароли не совпадают";
}
?>