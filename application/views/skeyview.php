<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Search Result</title>
</head>
<body>
<table>
<tr>
<td>ID</td>
<td>TITLE</td>
<td>DESCS </td>

</tr>
<?php foreach($posts as $post) { ?>
<tr>
<td> <?php echo $post->id; ?> </td>
<td>  <?php echo $post->title; ?> </td>
<td> <?php echo $post->descs; ?> </td>
</tr>
  <?php }  ?>
</table>
</body>
</html>