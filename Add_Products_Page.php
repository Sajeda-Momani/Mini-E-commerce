<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../Mini-E-commerce/CSS/Add_Products_Page.css">
</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img class="image" src="../Mini-E-commerce/img/LOGO.png" alt="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/View_Products_Page.php">My.Station</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end -->
    <img class="intro" src="../Mini-E-commerce/img/intro.jpg" alt="">
    <br>
    <br>
    <!-- add product start -->
    <h3>Build Your Own Work Station</h3>
    <br>
    <div class="contaner">
        <form action="View_Products_Page.php" method="post">
            <label for="">Product Name</label>
            <input type="text" name="Product Name" id="Product Name">
            <br>
            <label for="Product Price">Product Price</label>
            <input type="text" name="Product Price" id="Product Price">
            <br>
            <label for="Product Description">Product Description</label>
            <input type="text" name="Product Description" id="Product Description">
            <br>

            <label for="Product Image">Product Image</label>
            <input type="file" name="Product Image" id="Product Image">
            <br>
        </form>
        <input class="bt" type="submit" value="Upload">
    </div>
    <!-- add product end -->

    <!-- Footer Start -->
    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="https://www.facebook.com/profile.php?id=100041542906428&mibextid=ZbWKwL" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="https://www.facebook.com/profile.php?id=100041542906428&mibextid=ZbWKwL" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Linkedin -->
                <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="https://www.linkedin.com/in/sajeda-momani-ba6a77248/" role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="https://github.com/Sajeda-Momani" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white">SajedaMomani</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer End -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

