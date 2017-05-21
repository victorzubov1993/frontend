<?php
if(isset($_POST['form_data'])){
  $req = false; // изначально переменная для "ответа" - false
  // Приведём полученную информацию в удобочитаемый вид
  ob_start();
  echo '<pre>';
  print_r($_POST['form_data']);
  echo '</pre>';
  $req = ob_get_contents();
  ob_end_clean();
  echo json_encode($req); // вернем полученное в ответе
  exit;
}