<div class="container mt-5 mb-5">
	<div class="container">
		<?php					
		  $comment = new Comment();
		  $rows  = $comment->statusZero();
		?>
		
		<?php foreach($rows as $row): ?>
			<div class="row">
			  <div class="card mt-1 mb-1">
				<div class="card-body">
					<h4 class="card-title"><?= $row->name; ?></h4>
  					<h6 class="card-subtitle mb-2 text-muted"><?= $row->email; ?></h6>
					<p class="card-text"><?= $row->text; ?></p></br>
                    <span class="text-primary"> <a href="approve.php?id=<?= $row->id; ?>">Approve</a> </span> / <span><a href="remove.php?id=<?= $row->id; ?>" class="text-danger">Remove</a></span>
				</div>
			  </div>
		    </div>
		<?php endforeach; ?>
	
	</div>
</div>