<?php
session_start();

if (!isset($_SESSION["products"])) {
    $_SESSION["products"] = array();
}

// Form handling for adding a product
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = isset($_POST["Product_Name"]) ? htmlspecialchars($_POST["Product_Name"]) : "";
    $productPrice = isset($_POST["Product_Price"]) ? htmlspecialchars($_POST["Product_Price"]) : "";
    $productDescription = isset($_POST["Product_Description"]) ? htmlspecialchars($_POST["Product_Description"]) : "";

    // Check if the 'Product_Image' key exists in $_FILES
    if (isset($_FILES["Product_Image"])) {
        $productImage = $_FILES["Product_Image"]["name"];
        $productImageTmp = $_FILES["Product_Image"]["tmp_name"];
        $uploadDirectory = "uploads/";
        move_uploaded_file($productImageTmp, $uploadDirectory . $productImage);
    }

    // Add the product data to the session array "products"
    $_SESSION["products"][] = array(
        "Product_Name" => $productName,
        "Product_Price" => $productPrice,
        "Product_Description" => $productDescription,
        "Product_Image" => $productImage
    );
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../Mini-E-commerce/CSS/Add_Products_Page.css">
    <title>View Products</title>
</head>

<body>

    <?php
    include "./Header.php";
    ?>

    <br>

    <!-- View Products start -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h3>View Products</h3>
                </div>

                <!-- Displaying product cards from session data -->
                <?php foreach ($_SESSION["products"] as $product) : ?>
                    <div class="product-card">
                        <img class="product-image" src="uploads/<?php echo $product["Product_Image"]; ?>" alt="Product Image">
                        <h2><?php echo $product["Product_Name"]; ?></h2>
                        <p><strong>Price: $</strong><?php echo $product["Product_Price"]; ?></p>
                        <p><?php echo $product["Product_Description"]; ?></p>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <!-- View Products end -->

    <?php
    include './Footer.php'
    ?>

</body>

</html>
