<?php
/**
 * Created by PhpStorm.
 * User: Gulzat
 * Date: 15.04.2018
 * Time: 0:36
 */


$ran = rand(0000, 9999);
$put = 'images/';
$uploadfile = $put.basename($_FILES['filename']['name']);

if(isset($_FILES['filename']['name']) && ($_FILES ['filename'] != '' ))
{  $name = $_FILES["filename"]["name"];
    move_uploaded_file($_FILES["filename"]["tmp_name"], $put.$ran.$name);
    $namefile = $ran.$name;

    $text = $_POST['text'];
    $url1 = $_POST['url1'];
    $date = $_POST['date'];

    include_once ("news/db.php");
    mysql_query(" INSERT INTO image (image_url, text, image_date, img)
						VALUES(' $url1', '$text', ' $date', '$uploadfile')	
	");


    echo "image: ";
    echo "<img src='images/".$namefile."'/>";?>
 </br>
    <?php
}
else { echo "False";  }
echo "some  news: ";
print_r($_FILES);
print "</pre>";



?>