<!DOCTYPE html>
<html >
<head>
  
  <title> Edit Post </title>
</head>
<body>
       <a href="<?php echo site_url('post/');  ?>"> Go Back</a>
      <table>
      <form action="<?php echo site_url('post/update'); ?>" method="POST"> 

      <input type="hidden" name="id" value="<?php echo $posts->id; ?>" >

      <tr><td>Title:</td><td><input type="text" name="title" value="<?php echo $posts->title; ?>" ></td><tr>
      <tr><td>Description:</td><td><textarea name="descs" ><?php echo $posts->descs; ?></textarea></td></tr>
      <tr><td></td><td><input type="submit" name="submit" value="Insert Record"></td></tr>
      </form>
      </table>
</body>
</html>