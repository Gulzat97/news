<?php
/**
 * Created by PhpStorm.
 * User: Gulzat
 * Date: 14.04.2018
 * Time: 20:19
 */
  /*if(isset($_FILES['image']))
  {  $errors = array();
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];
  $file_ext = strtolower(end(explode('.', $_FILES['image']['name']))) ;
  $expensions = array("jpeg", "jpg", "png");

  if($file_size > 2097152)
  {  $errors[] = '  2 mb ';   }

  if(empty($errors ) == true)
  {  move_uploaded_file($file_tmp, "images/".$file_name);
      echo "Success";
  }
    else {  print $errors;   }
  }*/
//phpinfo();
?>
<table align="center">
<tr> <td align="center">
        <form action = 'send.php' method='POST' enctype="multipart/form-data" >
            Send this file: <input name="filename" type="file" />
<tr><td align="center">  URL: <input name="url1" type="text" />
    <tr><td align="center">  Description: <input name="text" type="text" />
    <tr><td align="center">  <input type = 'submit' value = "send file"/> </td></tr>
    <input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>" />

    </form>
</table>
