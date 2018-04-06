<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> my site</title>
</head>
<body>
<form method="post" action="index.php">
</br>To add news enter a login and password 
</br>Login </br><input type="text " name="login"> 
</br>Password</br><input type="text " name="password">
</br><input type="submit" name="sign" value="sign" />	</br>
</form>
<?php
    include_once("news/db.php");
	$result2 = mysql_query(" SELECT users_login, users_pass  FROM users  ");
 echo  "Miraida==============================";
  if(isset($_POST['sign']))
  { 
	$login = strip_tags(trim($_POST['login']));
	$pass =  strip_tags(trim($_POST['password']));
	 $errorMessage = ""; 
	 echo "yes12";
	 echo "$login      ";
	 echo $pass;
	 ?> </br>
	<?php 	while( $row2 = mysql_fetch_array($result2))
	{                             
      if( $login == $row2['users_login'] and  $pass == $row2['users_pass'])
	   {  echo "it is right"; $r = 1;	
		}
	  else {echo "sorry"; }
      echo  $row2['users_login']  ;
	  echo  $row2['users_pass']; ?>
	  </br>
	  <?php
    }
  }
  echo $r;
?>

</br>
<a href="news/add.php"> Add news</a>
<a href="news/find.php"> Find news</a>

<?php

//include_once("news/db.php");
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
<a href="news/edit.php?id=<?php echo $row['id'];?>"> editing news</a> 
  <hr/> 
<?php }?>
</body>  
</html>
