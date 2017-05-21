<?php
// Не забудьте изменить на $_GET,
// если будет устанавливать его в JS
if(isset($_POST['fio'])){
  $req = false;
  // Приведём полученную информацию в удобочитаемый вид
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
  $req = ob_get_contents();
  ob_end_clean();
  echo json_encode($req); // вернем полученное в ответе
  exit;
}
