<div class="card">
    <div class="card-header">
         <h4 class="card-title">Share Something!</h4>
    </div>
    <div class="card-body">
        <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Share Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" rows="8" cols="80" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Link</label>
                <input type="text" name="link" class="form-control">
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            <a class="btn btn-danger" href="<?php echo ROOT_URL; ?>shares">Cancel</a>
        </form>
    </div>
</div>
