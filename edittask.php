<<<<<<< HEAD
<?php
$task_id = $_POST['task_id'];
$user_name = $_POST['user_name'];
$task_email = $_POST['task_email'];
$task_content = $_POST['task_content'];
$task_complite = $_POST['task_complite'];
// echo ($task_id);
// echo ($user_name);
// echo ($task_email);
// echo ($task_content);
$link = mysqli_connect("localhost", "brainitb", "3eP0B!v7z#j3LY", "brainitb_test2");
if (isset($_POST['edit'])) {
    
$sql = mysqli_query($link, "UPDATE task SET user_name='".$user_name."', task_email='".$task_email."', task_content='".$task_content."', complite='".$task_complite."' WHERE task_id='".$task_id."'");
header("Location: /"); exit();
  }
  else if (isset($_POST['complite'])) {

$sql = mysqli_query($link, "UPDATE task SET complite='1'  WHERE task_id='".$task_id."'");
header("Location: /"); exit();
  }

=======
<?php
$task_id = $_POST['task_id'];
$user_name = $_POST['user_name'];
$task_email = $_POST['task_email'];
$task_content = $_POST['task_content'];
$task_complite = $_POST['task_complite'];
// echo ($task_id);
// echo ($user_name);
// echo ($task_email);
// echo ($task_content);
$link = mysqli_connect("localhost", "brainitb", "3eP0B!v7z#j3LY", "brainitb_test2");
if (isset($_POST['edit'])) {
    
$sql = mysqli_query($link, "UPDATE task SET user_name='".$user_name."', task_email='".$task_email."', task_content='".$task_content."', complite='".$task_complite."' WHERE task_id='".$task_id."'");
header("Location: /"); exit();
  }
  else if (isset($_POST['complite'])) {

$sql = mysqli_query($link, "UPDATE task SET complite='1'  WHERE task_id='".$task_id."'");
header("Location: /"); exit();
  }

>>>>>>> b409f354444ccc324ecee49635a0ba04f319a4e9
?>