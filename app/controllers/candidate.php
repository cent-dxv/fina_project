<?php
if (!isset($_SESSION)) {

  session_start();
}

if (empty($_SESSION['email'])) {

  header("location:login?login=");
} else {

  //  echo $_SESSION['name'] . ' ' . $_SESSION['email'];
  require_once  '../app/view/view_candidate.php';
}

if (isset($_POST['log_out'])) {
  session_destroy();
  header("location:login?login=");
}

// include "../app/view/yo.png";

if (isset($_GET['question_text'])) {
  echo $_GET['question_text'];
  echo $_GET['question_type'];
}

$controller = new Controller();

if (isset($_GET['question_text'])) {

  if ($_GET['question_type'] == "Check Box" || $_GET['question_type'] ==  "Radio Button") {
    $question_text = $_GET['question_text'];
    $question_type = $_GET['question_type'];
    $option_1 = $_GET['option_1'];
    $option_2 = $_GET['option_2'];
    $option_3 = $_GET['option_3'];
    $user_id = $_SESSION['user_id'];
   

    $controller->add_questionss($question_text, $question_type, $user_id, $option_1, $option_2, $option_3);

    header("Cache-Control: no-cache");
header("Pragma: no-cache");

header_remove(); 
    // header("location:candidate");

  } else {
    $question_text = $_GET['question_text'];
    $question_type = $_GET['question_type'];
    $user_id = $_SESSION['user_id'];
    $option_1 = $_GET['option_1'];

    $controller->add_questionss($question_text, $question_type, $user_id, $option_1, "", "");
    header("Cache-Control: no-cache");
header("Pragma: no-cache");

header_remove(); 
    // header("location:candidate");
  }
}
?>
<form action='candidate' method='post'>



  <input type='submit' name='log_out' value='log out'>
</form>

<?php


?>