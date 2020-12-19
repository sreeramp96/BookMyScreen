<?php
$error = $this->session->flashdata('error');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/Login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/dusk/64/000000/movie-projector.png">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <title>Admin</title>
</head>

<body class="bodylogin">
    <header>
        <?php
        $this->load->view('/templates/HeaderOther');
        ?>
    </header>
    <section>
        <div class="registration-form">
            <form method="post" action="<?php echo base_url('index.php/Controller/CheckAdminLogin'); ?>">
                <div class="form-group">
                    <h2 class="heading">Admin Log In</h2>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" name="username" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control item" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block create-account">Login</button>
                </div>
                <?php
                if ($error) {
                ?>
                    <strong class="warning">Warning! <?php echo $error; ?></strong>
                <?php
                }
                ?>
            </form>
        </div>
    </section>
    <footer>
        <?php
        $this->load->view('/templates/Footer');
        ?>
    </footer>
</body>

</html>