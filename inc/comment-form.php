<div class="container mt-5 mb-5 border p-3">
    <div class="row">
        <div class="col-12">

        <?php if (isset($_SESSION['empty'])): ?>
          <?= $_SESSION['empty']; ?>
          <?php unset($_SESSION['empty']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['message'])): ?>
          <?= $_SESSION['message']; ?>
          <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
      
            <h3>Leave your comment</h3>
            <form action="insert.php" method="post" id="form">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" id="name" name="name" placeholder="Enter your Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="text" name="text" rows="3" placeholder="Enter text..."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" id="submit" name="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </form>

         

        </div>
    </div>
</div>


