<div class="container">
	<div class="container">
		<div class="row">
			<?php
							
				$comment = new Comment();
				$rows  = $comment->select();
		
			?>
			<?php foreach($rows as $row): ?>
				<div class="card mt-1 mb-1">
					<div class="card-body">
					<h4 class="card-title"><?= $row->name; ?></h4>
  					  <h6 class="card-subtitle mb-2 text-muted"><?= $row->email; ?></h6>
						<p class="card-text"><?= $row->text; ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>