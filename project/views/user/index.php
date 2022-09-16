<h1>Les Articles</h1>

<?php foreach($data as $row) { ?>
    <section>
      <h2><?php echo $row['titre'] ?></h2>
      <p><?php echo $row['textArticle'] ?></p>
      <h5><?php echo date_format(date_create($row['date']),"Y/m/d") ?></h5>
      </section>
  <?php } ?>