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
	$author =  strip_tags(trim($_POST['author_id']));
  
	mysql_query(" UPDATE news SET title='$title',text='$text',
               author_id='$author' WHERE id='$id'  ");
	mysql_close();
}
  ?>
  
<form method="post" action="edit.php?id=<?php echo $id;?>">Title of news </br>
	<input type="text " name="title" value = "<?php echo $row['title'];?>" /> </br>Text of news </br>
	<textarea cols="40"  rows="10" name="text" ><?php echo $row['text'];?></textarea>  </br>Author of news </br>
	<input type="text" name="author" value="<?php echo $row['author_id'];?>"/> </br> 	
	<input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>" />
	<input type="hidden" name="time" value="<?php echo date("H:i:s"); ?>" /></br>
	<input type="submit" name="Save" value="Save"/>
</form>
</br>
<form action="#" method="post">
<select name="Color">
<option value="Red">Red</option>
<option value="Green">Green</option>
<option value="Blue">Blue</option>
<option value="Pink">Pink</option>
<option value="Yellow">Yellow</option>
</select>
<input type="submit" name="submit" value="Get Selected Values" />
</form>
<?php
if(isset($_POST['submit'])){
$selected_val = $_POST['Color'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
?>
</body>  
</html>
