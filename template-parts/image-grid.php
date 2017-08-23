<?php $attachments = new Attachments( 'attachments' ); ?>

<div class="images-grid">
<?php while( $attachments->get() ): ?>
<div class="grid-item col-4">
  <a href="<?= $attachments->src( 'full' ) ?>">
    <img src="<?= $attachments->src( 'custom-size' ) ?>">
  </a>
</div>
<?php endwhile; ?>
</div>


<?php 
/*
  ID: <?php echo $attachments->id(); ?><br />
  Type: <?php echo $attachments->type(); ?><br />
  Subtype: <?php echo $attachments->subtype(); ?><br />
  URL: <?php echo $attachments->url(); ?><br />
  Image: <?php echo $attachments->image( 'thumbnail' ); ?><br />
  Source: <?php echo $attachments->src( 'full' ); ?><br />
  Size: <?php echo $attachments->filesize(); ?><br />
  Title Field: <?php echo $attachments->field( 'title' ); ?><br />
  Caption Field: <?php echo $attachments->field( 'caption' );
*/ 
?>
