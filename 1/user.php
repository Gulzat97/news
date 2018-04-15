<?php /*<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> my site</title>
</head>
<body>
<a href="add.php"> Add news</a>
<a href="find.php"> Find news</a>
 
<?php>

include_once("db.php");
//$result = mysql_query(" SELECT * FROM news order by id DESC ");
//$result = mysql_query(" SELECT * FROM news order by id DESC limit 1 ");
//$result = mysql_query(" SELECT * FROM news WHERE author='Nursultan' order by id DESC ");

$result = mysql_query(" SELECT id,title,text,date,time,author_id FROM news ");

while( $row = mysql_fetch_array($result))
{ ?>
<h1><?php echo $row['title']?></h1>
<p><?php echo $row['text']?></p>
<p>Date of publicion: <?php echo $row['date']?>/<?php echo $row['time']?></p> 
<p>Author of news:  
<?php      
    $id = $row['author_id'];                          
    $result1 = mysql_query("  SELECT name FROM author WHERE author_id='$id'    "); 
	$row1 = mysql_fetch_assoc($result1);
	 echo $row1['name'];
	 echo $id ;
	//  mysql_close();

  ?></p>

<?php }?>

</body>  
</html>*/?>

    <html>
    <head>
    <title>Main page</title>
    </head>
    <body>
    <h2>Main page</h2>
    <form action="testreg.php" method="post">

    <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
 <p>
    <label>your login:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
    <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
    <p>
    <label>Your password:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
    <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
    <p>
    <input type="submit" name="submit1" value="Sign in">
        <input type="submit" name="submit2" value="Sign up">
    <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 
<br>
 <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** -->
        <? //<a href="reg.php">Sign Up</a>  ?>
    </p></form>
    <br>
    <?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    //echo "Вы вошли на сайт, как гость<br><a href='#'>
    //Эта ссылка доступна только зарегистрированным пользователям</a>";
    echo "You are logged on as guest<br><a href='#'>This link is only available to registered users</a>";
    }
    else
    { // Если не пусты, то мы выводим ссылку
    //echo "Вы вошли на сайт, как ".$_SESSION['login']."<br><a  href='http://tvpavlovsk.sk6.ru/'>Эта ссылка доступна 
    //только  зарегистрированным пользователям</a>";
     echo "You are now logged in, as ".$_SESSION['login']."<br>
     <a href='http://tvpavlovsk.sk6.ru/'>This link is only available to registered users</a>"; 
    }?>
    </body>
    </html>