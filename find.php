<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> adding news</title>
</head>
<body>

<form method="post" action="find.php">Title of news </br>
	<input type="text " name="title"> </br>
	<input type="submit" name="find" value="find"/>
</form>
<?php
	include_once("db.php");
	$result = mysql_query(" SELECT id,title,text,date,time,author_id FROM news  ");
  mysql_close();
	if(isset($_POST['find'])){  // function  clear_date($word)
   //{   return (strip_tags(trim($word)));   }
  
	$title1 = strip_tags(trim($_POST['title']));

	while( $row = mysql_fetch_array($result)){ if($title1==$row['title'])
	{ $text1 =$row['text'];  
		?>
		<p><?php echo $row['text']?></p>
		<p>Date of publicion: <?php echo $row['date']?>/<?php echo $row['time']?></p> 
		<p>Author of news:  <?php echo $row['author_id']?></p>
		<?php
	}
}
}
?>
</body>  
</html>