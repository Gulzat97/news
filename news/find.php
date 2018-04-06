<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> finding news</title>
</head>
<body>

<form method="post" action="find.php">Title of news </br>
	<input type="text " name="title"> </br>
	<input type="submit" name="find" value="find"/>
</form>
<?php
	include_once("db.php");
	$result = mysql_query(" SELECT id,title,text,date,time,author_id FROM news  ");
 
	if(isset($_POST['find']))
  {  
	$title1 = strip_tags(trim($_POST['title']));

	while( $row = mysql_fetch_array($result))
	{ if( $title1 == $row['title'])
	   { $text1 =$row['text'];  
         $date1 =$row['date'];
         $time1 =$row['time'];
		 $id =$row['author_id'];  
		?>
		<p><?php echo $text1; ?></p>
       <p>Date of publicion: <?php echo $date1; ?>/<?php echo $time1; ?></p> 
  	   <p>Author of news:  
	   <?php                           
           $result1 = mysql_query("  SELECT name FROM author WHERE author_id='$id'    "); 
	       $row1 = mysql_fetch_assoc($result1);
	        echo $row1['name']; 
			
		?></p>
		<?php
	  }
    }
}
   mysql_close();?>
    
</body>  
</html>