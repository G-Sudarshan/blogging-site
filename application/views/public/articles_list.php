<?php include('public_header.php'); ?>
<?php //echo form_hidden('image_path')  ?>
<div class="container">
	<h1>All Articles</h1>
	<table class="table">
		<thead>
			<tr>
				<td>Sr. No.</td>
				<td>Article Title</td>
				<td>Published On</td>
			</tr>
		</thead>
		<tbody>
			
			<tr>
				<? if( count($articles)): ?>
					<?php $count= $this->uri->segment(3,0); ?>
					<?php foreach( $articles as $article ): ?>
				<td><?= ++$count ?></td>
				<td><?= anchor("user/article/{$article->id}",$article->title) ?></td>
				<td><?= date('d M y H:i:s', strtotime($article->created_at)); ?></td>
			
			</tr>

			<?php endforeach; ?>

			<? else : ?>
				<tr>
				<td colspan="3"> More articles on next page!</td>
			    </tr>
				<? endif; ?>

		</tbody>
	</table>

	<?= $this->pagination->create_links() ?>
	
</div>
<?php include('public_footer.php');?>