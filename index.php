<!doctype html>
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
// mysql_close();

while( $row = mysql_fetch_array($result))
{ ?>
<h1><?php echo $row['title']?></h1>
<p><?php echo $row['text']?></p>
<p>Date of publicion: <?php echo $row['date']?>/<?php echo $row['time']?></p> 
<p>Author of news:  
<?php  //include_once("db.php"); 
     //echo $row['author_id']
     $id = $row['author_id'];                          
    $result1 = mysql_query("  SELECT  author.name FROM author WHERE author_id='$id'    "); 
	$row1 = mysql_fetch_assoc($result);
	//var_dump( $row1);
	//die();
	//mysql_close();
     //echo $row1['name'];
	 
  ?></p>
<a href="edit.php?id=<?php echo $row['id'];?>"> editing news</a> 
  <hr/> 

<?php }?>
</body>  
</html>
