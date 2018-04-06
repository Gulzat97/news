<?php
    session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
   // exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
      exit (" You did not enter all the information, go back and fill in all the fields");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
// подключаемся к базе
    include_once ("news/db.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то       //просто измените путь 
$result = mysql_query("SELECT * FROM users WHERE users_login = '$login'");
 //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['users_pass']))
    {
    //если пользователя с введенным логином не существует
    //exit ("Извините, введённый вами login или пароль неверный.");
      exit ("Sorry, the login or password you entered is incorrect.");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['users_pass']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['login']=$myrow['users_login']; 
    $_SESSION['id']=$myrow['users_id'];
    //эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
    echo 
    //"You have successfully entered the site,$login! <a href='news/add.php'>Add news</a>";
    "You have successfully entered the site,$login! ";?></br>
	<?php echo "You can add or edit your news! "; ?> </br></br>
	<?php
	include("news/add.php");
	
	}
 else {
    //если пароли не сошлись
    exit ("Sorry, the login or password you entered is incorrect");
    }
    }
    ?>