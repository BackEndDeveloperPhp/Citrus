<?php

   
require_once "classes/model.php";
require_once "classes/comment.php";

$model = new Comment();
$rows = $model->select();

?>
 
<?php   if (!empty($rows)) : ?>
    <?php    foreach($rows as $row) : ?>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                         <p><a href="#"><strong><?= $row->name; ?></strong></a></p>
                         <p class="muted-text"> <?= $row->email; ?> </p>
                          <p><?= $row->text; ?></p>
                    </div>
                </div>
            </div>
            <hr>

    <?php endforeach; ?>       
<?php endif; ?>

              
    