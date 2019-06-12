<?php include_once('public_header.php'); ?>

<div class="container">
<h1>
	<?= $article->title ?>
</h1>
<span class="pull-right">

	<?= date('d M y H:i:s', strtotime($article->created_at));?>
	

</span>
<hr>
<?php if( ! is_null($article->image_path)):  ?> 
<img src="<?= $article->image_path ?>">
<?php endif; ?>
<p>
	<?= $article->body ?>
</p>
</div>

<?php include_once('public_footer.php'); ?>