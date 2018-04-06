<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> editing news</title>
</head>
<body>
<?php
include_once("db.php");

$id = $_GET['id'];
$result = mysql_query("  SELECT  title,text,date,time,author_id 
                         FROM news WHERE id='$id'    ");

  $row = mysql_fetch_assoc($result);

  if(isset($_POST['Save'])){ 
	$title = strip_tags(trim($_POST['title']));
	$text =  strip_tags(trim($_POST['text']));
	//$author =  strip_tags(trim($_POST['author_id']));
    $author = $_POST['author'];
	mysql_query(" UPDATE news SET title='$title',text='$text',
               author_id='$author' WHERE id='$id'  ");
	
}
  ?>
  
<form method="post" action="edit.php?id=<?php echo $id;?>">Title of news </br>
	<input type="text " name="title" value = "<?php echo $row['title'];?>" /> </br>Text of news </br>
	<textarea cols="40"  rows="10" name="text" ><?php echo $row['text'];?></textarea>  </br>
	 Author of news 
	  <select name="author">
    	<?php
		$result = mysql_query(" SELECT author_id, name FROM author ");
		$g = 0;
		  while( $row = mysql_fetch_array($result)) 
         { $g = $row['author_id']; ?> <option value = '<?php echo $row['author_id']; ?>' > 
	         <p><?php echo $row['author_id']; echo $row['name']; echo $g; ?> </p>
		     </option>
		 <?php } 
		 mysql_close();?>	 
      </select>	  
	
	
	</br>
	<input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>" />
	<input type="hidden" name="time" value="<?php echo date("H:i:s"); ?>" /></br>
	<input type="submit" name="Save" value="Save"/>
</form>
</br>

</body>  
</html>
