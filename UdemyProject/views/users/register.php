<div class="card">
    <div class="card-header">
         <h4 class="card-title">Register User</h4>
    </div>
    <div class="card-body">
        <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
</div>
