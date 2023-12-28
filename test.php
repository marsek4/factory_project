<?php
$word1 = $_POST['word1'];
//$word2 = $_POST['word2'];
if (strlen($word1) >= 5) {
    echo "Логин подходит";
//} elseif (strlen($word1) > 5 || strlen($word2) > 5) {
  //  echo "One of the words is suitable";
} else {
    echo "Логин слишком короткий";
}
?>
