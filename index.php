<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testpage</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
            <div class="container">
            <div class="logout"></div>

            <div class="reguath">
                <div class="auth">
                    <p>Авторизация</p>
                    <form action="login.php" id="auth" method="POST">
                        <label for="login_auth">Логин</label>
                        <input type="text" name="login_auth" id="login_auth" placeholder="Login">
                        <label for="password_auth">Пароль</label>
                        <input type="password" name="password_auth" id="password_auth" placeholder="Passwod">
                        <input type="checkbox" name="not_attach_ip" id="not_attach_ip" checked="checked" style="display: none">
                        <input name="submit" id="login" type="submit" value="Войти">
                    </form>
                </div>

            </div>
        </div>
        <div class="tasks">
        <div class="tasks_container">
<table>
    <thead>
        <tr>

            <th>Имя пользователя</th>
            <th>Email</th>
            <th>Текст задачи</th>
        </tr>
    </thead>
    <tbody>

    </tbody>

</table>
<div class="content">    
<?
// Соединямся с БД
$link=mysqli_connect("localhost", "brainitb", "3eP0B!v7z#j3LY", "brainitb_test2");
// Получаем данные с БД
$sql = mysqli_query($link, 'SELECT * FROM `task`');
$user_id = $_COOKIE["id"];
if (isset($_GET['pageno'])) {
  // Если да то переменной $pageno присваиваем его
  $pageno = $_GET['pageno'];
} else { // Иначе
  // Присваиваем $pageno один
  $pageno = 1;
}

// Назначаем количество данных на одной странице
$size_page = 3;
// Вычисляем с какого объекта начать выводить
$offset = ($pageno-1) * $size_page;
$count_sql = "SELECT COUNT(*) FROM `task`";
// Отправляем запрос для получения количества элементов
$result = mysqli_query($link, $count_sql);
// Получаем результат
$total_rows = mysqli_fetch_array($result)[0];
// Вычисляем количество страниц
$total_pages = ceil($total_rows / $size_page);
$sql1 = "SELECT * FROM `task` LIMIT $offset, $size_page";
// Отправляем SQL запрос
$res_data = mysqli_query($link, $sql1);
// Цикл для вывода строк
while ($result = mysqli_fetch_array($res_data)) {
  
    if($user_id == 1){
    echo "<form action='edittask.php' class='edit' method='POST'><input type='hidden' value='{$result['task_id']}' name='task_id'><input type='text' value='{$result['user_name']}' name='user_name' id='user_name{$result['task_id']}'><input type='text'  value='{$result['task_email']}' name='task_email' id='task_email{$result['task_id']}'><input type='text'  value='{$result['task_content']}' name='task_content' id='task_content{$result['task_id']}'><input type='text'  value='{$result['complite']}' name='task_complite' id='task_complite{$result['task_id']}'><input type='submit' name='complite' value='завершить'><input type='submit' name='edit' value='редактировать'></form>";
  } else{
    echo "<form action='edittask.php' class='edit' method='POST'><input type='hidden' value='{$result['task_id']}' name='task_id'><input disabled type='text' value='{$result['user_name']}' name='user_name' id='user_name{$result['task_id']}'><input disabled type='text'  value='{$result['task_email']}' name='task_email' id='task_email{$result['task_id']}'><input disabled type='text'  value='{$result['task_content']}' name='task_content' id='task_content{$result['task_id']}'><input type='text' disabled value='{$result['complite']}' name='task_complite' id='task_complite{$result['task_id']}'><input type='submit'  name='complite' value='завершить'></form>";
  }
  }
?>         
        </div>  
           
        <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
        <div class="task_create">
                <h3>Создание задачи</h3>
                <form action="create_task.php" id="create" method="POST">
                    <label for="user_name">Имя пользователя</label>
                    <input type="text" name="user_name" id="user_name">
                    <label for="task_email;">Email</label>
                    <input type="email" name="task_email" id="task_email">
                    <label for="task_content">Текст задачи</label>
                    <input type="text" name="task_content" id="task_content">
                    <input type="submit" value="Создать задачу">
                </form>
            </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="script.js"></script>
</body>

</html>