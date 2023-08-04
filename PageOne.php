<!DOCTYPE html>
<html>
<head>
    <title>My Store Website</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">My Store</a>
            <ul class="navbar-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="pages/add_products.php">Add Products</a></li>
                <li><a href="pages/view_products.php">View Products</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h1>Welcome to My Store!</h1>
        <p>This is the home page of our online store. Explore the different sections using the menu above.</p>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            &copy; <?php echo date("Y"); ?> My Store. All rights reserved.
        </div>
    </footer>
</body>
</html>





