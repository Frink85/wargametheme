<?php
/**
 * The template for displaying the footer.
 */
?>
<?php
	$rows = get_field('_phrase', EMPEROR_WORDS);
	$rand_row = $rows[ array_rand( $rows ) ];
?>
	<footer class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<p class="text-center text-muted text-emperor"><?php echo $rand_row['_phrase']; ?></p>
					</div>
				</div>
			</div>
		</div>
 	</footer>
  </body>
</html>