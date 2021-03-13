<?
$user_name = $_POST['user_name'];
$task_email = $_POST['task_email'];
$task_content = $_POST['task_content'];
$link=mysqli_connect("localhost", "brainitb", "3eP0B!v7z#j3LY", "brainitb_test2");

// Получаем данные с БД
$sql = mysqli_query($link, "INSERT INTO task SET user_name='".$user_name."', task_email='".$task_email."', task_content='".$task_content."'"); 
header("Location: /"); exit();
//смотрю какой параметр передан
// while ($result = mysqli_fetch_array($sql)) {
//     echo "<li id='{$result['contact_id']}'>{$result['contact_name']}: {$result['contact_phone']}<a class='add-to-favorite' href='#' rel='{$result['contact_id']}' >Убрать из избранного</a></li>";
//   } 
?>