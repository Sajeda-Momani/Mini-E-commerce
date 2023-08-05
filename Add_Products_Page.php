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
    <?php
    include "./Header.php";
    ?>
    <!-- navbar end -->

    <img class="intro" src="../Mini-E-commerce/img/intro.jpg" alt="">
    <br>
    <br>
    <!-- add product start -->
    <h3>Build Your Own Work Station</h3>
    <br>
    <div class="contaner">
        <form action="../Mini-E-commerce/View_Products_Page.php" method="post" enctype="multipart/form-data">
            <label for="">Product Name</label>
            <input type="text" name="Product Name" id="Product Name" required>
            <br>
            <label for="Product Price">Product Price</label>
            <input type="text" name="Product Price" id="Product Price" required>
            <br>
            <label for="Product Description">Product Description</label>
            <input type="text" name="Product Description" id="Product Description" required>
            <br>

            <label for="Product Image">Product Image</label>
            <input type="file" name="Product Image" id="Product Image" required>
            <br>
            <input class="bt" type="submit" value="Upload">
        </form>
    </div>

    <br>
    <br>
    <!-- add product end -->

    <!-- Table Start -->

    <?php session_start()  ?>

    <?php

    // Initialize the session array "products" if not already set
    if (!isset($_SESSION["products"])) {
        $_SESSION["products"] = array();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize the form inputs
        $productName = isset($_POST["Product_Name"]) ? htmlspecialchars($_POST["Product_Name"]) : "";
        $productPrice = isset($_POST["Product_Price"]) ? htmlspecialchars($_POST["Product_Price"]) : "";
        $productDescription = isset($_POST["Product_Description"]) ? htmlspecialchars($_POST["Product_Description"]) : "";

        // Check if the 'Product_Image' key exists in $_FILES
        // if (isset($_FILES["Product_Image"]) && $_FILES["Product_Image"]["error"] === UPLOAD_ERR_OK) {
        //     $productImage = $_FILES["Product_Image"]["name"];
        //     $productImageTmp = $_FILES["Product_Image"]["tmp_name"];
        //     $uploadDirectory = "uploads/";
        //     move_uploaded_file($productImageTmp, $uploadDirectory . $productImage);
        // } else {
        //     // If no image is uploaded or an error occurred during upload, set a default image
        //     $productImage = "..\img\LOGO.png";
        // }

        // Add the product data to the session array "products"
        $_SESSION["products"][] = array(
            "Product_Name" => $productName,
            "Product_Price" => $productPrice,
            "Product_Description" => $productDescription,
            // "Product_Image" => $productImage
        );
    }

    if (count($_SESSION["products"]) > 0) {
        echo '
    <div style="margin: 5%; text-align:center">
    <table class="table table-striped">
        <thead class="table-header">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
         
            </tr>
        </thead>
        <tbody>
    </div>';

        foreach ($_SESSION["products"] as $product) {
            echo '<tr>
            <td>' . $product["Product_Name"] . '</td>
            <td>' . $product["Product_Price"] . '</td>
            <td>' . $product["Product_Description"] . '</td>
        </tr>';
        }

        echo '</tbody>
    </table>';
    } else {
        echo "<script>alert('No Product Added')</script>";
    }

    ?>


    <!-- Table End -->

    <!-- next page bt -->
    <div style="text-align: center; display: flex; flex-direction: column; margin: 5%; margin-top: 0px; margin-bottom: 0px; border: 1px solid #364f6b; border-radius: 5px; background-color: #f9f9f9; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24); padding: 10px;">
        <a href="../Mini-E-commerce/View_Products_Page.php" style=" color: #47688d;">View My Station</a>
    </div>
    <!-- next page bt -->

    <br>
    <?php
    include './Footer.php'
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>