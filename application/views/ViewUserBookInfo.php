<?php
$username = $this->session->userdata('Name');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/ViewAllBookings.css">
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/dusk/64/000000/movie-projector.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <title>Booking Details</title>
</head>

<body>
    <header>
        <?php
        $this->load->view('/templates/HeaderOther');
        ?>
    </header>
    <section>
        <div class="main-content">
            <div class="container mt-7">
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <h3 class="mb-0">Booking Details</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Movie</th>
                                            <th scope="col">Seat Type</th>
                                            <th scope="col">Seat Reserved</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($data as $key => $value) {
                                        ?>
                                            <tr>
                                                <td><?php echo $value->Movie; ?></td>
                                                <td><?php echo $value->SeatType; ?></td>
                                                <td><?php echo $value->SeatNumber; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" onclick="location.href='<?php echo base_url('index.php/Controller/logout'); ?>'" class="btn btn-danger btn-sm">Logout</button>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php
        $this->load->view('/templates/Footer');
        ?>
    </footer>
</body>

</html>