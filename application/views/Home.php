<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/Home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/dusk/64/000000/movie-projector.png">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <header>
        <?php
        $this->load->view('/templates/HeaderHome');
        ?>
    </header>
    <section>
        <div class="card-group">
            <div class="card card1">
                <img src="https://m.media-amazon.com/images/M/MV5BOTc2ZTlmYmItMDBhYS00YmMzLWI4ZjAtMTI5YTBjOTFiMGEwXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Soorarai Pottru</h5>
                </div>
            </div>
            <div class="card card2">
                <img src="https://cdn.flickeringmyth.com/wp-content/uploads/2020/07/Tenet-Poster-2-1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tenet</h5>
                </div>
            </div>
            <div class="card card3">
                <img src="https://m.media-amazon.com/images/I/51p3oAsXNmL._AC_.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Inception</h5>
                </div>
            </div>
            <div class="card card4">
                <img src="https://www.pinkvilla.com/files/styles/ld-image/public/bigil_0.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Bigil</h5>
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