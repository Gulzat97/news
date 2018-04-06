<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> my site</title>
</head>
<body>
<label>if you want to add new news:</label>
<a href="user.php"> click heres</a></br> 
<?php //<a href="news/add.php"> Add news</a> ?>
<a href="news/find.php"> Find news</a>
<?php>
include_once("news/db.php");
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