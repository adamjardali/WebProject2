<?php 
include('../Security/NotLogedin.php');
include('../Database/Database.php');

// Assuming $imagesData is an array of image paths
$imagesData = getGalleryImages();

// Pagination
$itemsPerPage = 6;
$totalItems = count($imagesData);
$totalPages = ceil($totalItems / $itemsPerPage);

// Get the current page from the query parameter, default to 1 if not set
$currentPage = isset($_GET['page']) ? max(1, $_GET['page']) : 1;

// Calculate the offset for the current page
$offset = ($currentPage - 1) * $itemsPerPage;

// Get a subset of images for the current page
$currentPageImages = array_slice($imagesData, $offset, $itemsPerPage);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elzero</title>
    <link rel="stylesheet" href="../CSS/normalize.css" />
    <link rel="stylesheet" href="../CSS/Adam.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../CSS/all.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />

    <!-- Additional CSS for the footer -->
    <style>
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            padding: 10px;
            margin: 0 5px;
            text-decoration: none;
            color: #333;
            background-color: #f5f5f5;
            border-radius: 5px;
        }

        .pagination a.active {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php include('../nav.php'); ?>
    <!-- Start Gallery -->
    <div class="gallery" id="gallery">
        <h2 class="main-title">Gallery</h2>
        <div class="container">

            <?php foreach ($currentPageImages as $imagePath): ?>
                <div class="box">
                    <div class="image">
                        <img src="images/<?php echo $imagePath; ?>" alt="" />
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <!-- Pagination Footer -->
    <div class="pagination">
        <?php if ($currentPage > 1): ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>
        
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?php echo $i; ?>" <?php echo ($i === $currentPage) ? 'class="active"' : ''; ?>><?php echo $i; ?></a>
        <?php endfor; ?>

        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>

    <!-- End Footer -->
    <script src="js/main.js"></script>
</body>
</html>
