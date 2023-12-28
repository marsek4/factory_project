<?php
//$word1 = $_POST['word1'];
$word2 = $_POST['word2'];
if (strlen($word2) >= 10) {
    echo "Пароль подходит\n";
//} elseif (strlen($word1) > 5 || strlen($word2) > 5) {
  //  echo "One of the words is suitable";
} else {
    echo "Пароль слишком короткий";
}
if (preg_match('/[!@#$%^&*]/', $word2)) {
    echo ", строка содержит специальные символы";
} else {
    echo ", строка должно содержать хотя бы один специальных символов";
}
?>