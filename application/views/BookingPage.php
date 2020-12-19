<?php
$username = $this->session->userdata('Name');
$id = $this->session->userdata('ID');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/BookingPage.css">
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/dusk/64/000000/movie-projector.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <title>Booking</title>
</head>
<header>
    <?php
    $this->load->view('/templates/HeaderOther');
    ?>
</header>
<section>
    <div class="registration-form">
        <form class="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/Controller/BookSeat/' . $id); ?>">
            <div class="form-group">
                <h2 class="heading">Booking Details</h2>
                <h2 class="heading">Hi, <?php echo $username ?></h2>
            </div>
            <div class="form-group">
                <label for="name">Movie: </label>
                <select class="form-control form-control-sm" name="movie">
                    <option selected>Select</option>
                    <option value="Soorarai Pottru">Soorarai Pottru</option>
                    <option value="Tenet">Tenet</option>
                    <option value="Inception">Inception</option>
                    <option value="Bigil">Bigil</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Seat Type : </label>
                <select class="form-control form-control-sm" name="seatType">
                    <option selected>Select</option>
                    <option value="Balcony">Balcony</option>
                    <option value="Gold">Gold</option>
                    <option value="Silver">Silver</option>
                    <option value="First Class">First Class</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Seat Number : </label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="seatNumber1" name="seatNumber" class="custom-control-input" value="A1">
                    <label class="custom-control-label" for="seatNumber1">A1</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="seatNumber2" name="seatNumber" class="custom-control-input" value="A2">
                    <label class="custom-control-label" for="seatNumber2">A2</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">Book Seat</button>
            </div>
            <div class="form-group">
                <button type="button" onclick="location.href='<?php echo base_url('index.php/Controller/ViewBookings'); ?>'" class="btn btn-success btn-sm">View Bookings</button>
            </div>
            <div class="form-group">
                <button type="button" onclick="location.href='<?php echo base_url('index.php/Controller/logout'); ?>'" class="btn btn-danger btn-sm">Logout</button>
            </div>
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