

<h1>Rédiger un article</h1>

<form action="index.php?module=user&action=insertText" method="post">

<h4>Titre</h4>
<input type="title" name="title">

<h4>Text de l'article</h4>
<textarea name="text" id="" cols="100" rows="10"></textarea><br>


<h4>Date</h4>
<input type="date" name="date">

<input type="submit">

<table class='listing'>
  <thead>
    <tr>
      <th>Titre</th>
      <th>Text</th>
      <th>Date</th>
      <th>Effacer</th>
    </tr>
  <thead>
  <tbody>
  <?php foreach($data as $row) { ?>
    <tr>
      <td><?php echo $row['titre'] ?></td>
      <td><?php echo $row['textArticle'] ?></td>
      <td><?php echo date_format(date_create($row['date']),"Y/m/d") ?></td>
      <td><form action="?module=user&action=delete" method="post"><input type="hidden" name="articleId" value="<?php echo $row['articleId'] ?>"><input type="submit" Value="Effacer"></form></td>
    </tr>
  <?php } ?>
  <tbody>
</table>