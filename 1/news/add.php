<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> adding news</title>
</head>
<body>
<?php include_once("db.php"); ?>
<form method="post" action="news/add.php">Title of news </br>
    <input type="text " name="title"> </br>Text of news </br>
    <textarea cols="40"  rows="10" name="text" ></textarea>  </br>Author of news

    <select name="author">
        <?php
        $result = mysql_query(" SELECT author_id, name FROM author ");
        $g = 0;
        while( $row = mysql_fetch_array($result))
        { $g = $row['author_id']; ?> <option value = '<?php echo $row['author_id']; ?>' >
            <p><?php echo $row['author_id']; echo $row['name']; echo $g; ?> </p>
        </option>
        <?php } ?>
    </select>
    <input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>" />
    <input type="hidden" name="time" value="<?php echo date("H:i:s"); ?>" />
    <input type="submit" name="add" value="add" />
</form>
<?php

if(isset($_POST['add']))
{
    $id = strip_tags(trim($_POST['id']));
    $title = strip_tags(trim($_POST['title']));
    $text =  strip_tags(trim($_POST['text']));
    $varAuthor = $_POST['author'];
    $errorMessage = ""; ?> </br>

    <?php echo "You have selected :" .$varAuthor;
    $author = $varAuthor;
    $date = $_POST['date'];
    $time = $_POST['time'];

    mysql_query(" INSERT INTO news (title,text,date,time,author_id)
						VALUES('$title','$text','$date','$time','$author')	
	");

    mysql_close();
    echo "The news was succesfully added.";
}
?>
</body>
</html>