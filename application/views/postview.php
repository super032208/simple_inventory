<!DOCTYPE html>
<html>
<head>
<title>Displaying all posts</title>
</head>
<body>
<!-- search by title -->
  <h2>Search in codeigniter - php - framework</h2>
  <form action="<?php echo site_url('post/skeyword'); ?>"  method="POST" >
  <input type="text" name="title">
  <input type="submit" name="submit" value="Search">
  
  
  </form>
  <!-- post views -->
      <h2>Display all posts here</h2>
      <table>
      <form action="<?php echo site_url('post/add'); ?>" method="POST"> 

      <tr><td>Title:</td><td><input type="text" name="title"></td><tr>
      <tr><td>Description:</td><td><textarea name="descs" id="" ></textarea></td></tr>
      <tr><td></td><td><input type="submit" name="submit" value="Insert Record"></td></tr>
      </form>
      </table>
  
<table>
<tr>
<td>ID</td>
<td>TITLE</td>
<td>DESCS </td>
<td>EDIT</td>
<td>DELETE</td>
</tr>
<!-- view post -->
<?php foreach($posts as $post) { ?>
<tr>
<td> <?php echo $post->id; ?> </td>
<td>  <?php echo $post->title; ?> </td>
<td> <?php echo $post->descs; ?> </td>
<td> <a href="<?php  echo site_url('post/postedit/' .$post->id); ?>">Edit </a> </td>
<td> <a href="<?php  echo site_url('post/delete/' .$post->id); ?>">Delete </a> </td>

</tr>
  <?php }  ?>
</table>


</body>
</html>