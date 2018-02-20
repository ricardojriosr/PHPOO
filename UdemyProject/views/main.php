<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Shareboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style.css">
    </head>

    <body>
        <nav class="navbar navbar-light bg-light navbar-expand-md">
            <div class="container">
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse"
                data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span>
&#x2630;</button> <a class="navbar-brand"
                href="<?php echo ROOT_URL; ?>">Shareboard</a>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a href="<?php echo ROOT_URL; ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item"><a href="<?php echo ROOT_URL; ?>shares" class="nav-link">Shares</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
                        <?php if (isset($_SESSION['is_logged_in'])) : ?>
                        <li class="nav-item"><a href="<?php echo ROOT_URL; ?>users/profile" class="nav-link">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
                        <li class="nav-item"><a href="<?php echo ROOT_URL; ?>users/logout" class="nav-link">Logout</a></li>
                        <?php else : ?>
                        <li class="nav-item"><a href="<?php echo ROOT_URL; ?>users/login" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="<?php echo ROOT_URL; ?>users/register" class="nav-link">Register</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
            <br/>
              <?php Messages::display(); ?>
              <?php require($view); ?>

        </div>
        <!-- /.container -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>
