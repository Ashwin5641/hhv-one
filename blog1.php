<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog1 | Sri Sai Balaji Physiotherapy Clinic</title>
    <link rel="icon" href="./assets/images/favicon.png" type="x-image/icon">

    <!-- --------------link for the styling service page--------------- -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./blog1.css">
    <link rel="stylesheet" href="./blog-sidebar.css">


    <!-- --------------link for the font awesome icons--------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=download" />

</head>
<body>
    <!-- --------------start of the topbar--------------- -->
    <?php include './topbar.php' ?>

    <!-- --------------start of the navber--------------- -->
    <?php include './navbar.php' ?>

    <!-- --------------start of the page title section--------------- -->

    <div class="page-title-section">
        <div class="page-title">
            <h2>Blog</h2>
            <div class="page-title-nav">
                <a href="./index.php">Home</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Products</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="./blog1.php">Blog1</a>
            </div>
        </div>
    </div>

    <!-- ----------------start of the blog content section---------------- -->
    <div class="page-content-sidebar-section">
        <div class="page-content-section">
            <div class="page-blog-content-hero-image">
                <div class="page-blog-content-hero-img">

                </div>
            </div>
            <div class="page-blog-content-first-info">
                <p>For over six decades, HHV Thermal Technologies has been a leader in vacuum and thin-film technology. Our expertise in high-performance vacuum furnaces supports industries such as space, aerospace, defence, automotive, and metallurgy. With a focus on precision engineering and advanced manufacturing, we deliver solutions that meet stringent international standards.</p>
                <p>From research and development to large-scale industrial applications, HHV furnaces are trusted for reliability, innovation, and efficiency. Our systems are designed to perform consistently under demanding conditions across critical sectors worldwide.</p>
            </div>
            <div class="page-blog-content-second-info">
                <h2>Innovative Solutions for Global Industries</h2>
                <p>HHV furnaces are engineered with advanced design tools and manufacturing excellence to provide world-class performance. We adhere to NADCAP and CE certifications, ensuring compliance with global quality benchmarks while serving specialized applications.</p>
                <div class="page-blog-content-second-info-images">
                    <div class="page-blog-content-second-info-image page-blog-content-second-info-image1"></div>
                    <div class="page-blog-content-second-info-image page-blog-content-second-info-image2"></div>
                </div>
                <div class="page-blog-content-second-points">
                    <ul>
                        <li><span><i class="fa-solid fa-circle-check"></i></span><p>Custom-designed vacuum furnaces for aerospace and defence applications.</p></li>
                        <li><span><i class="fa-solid fa-circle-check"></i></span><p>Advanced thermal processing solutions for automotive and metallurgy.</p></li>
                        <li><span><i class="fa-solid fa-circle-check"></i></span><p>Compliance with global standards including NADCAP and CE.</p></li>
                        <li><span><i class="fa-solid fa-circle-check"></i></span><p>Decades of proven expertise in vacuum and thin-film technology.</p></li>
                    </ul>
                </div>
                <p>Our commitment to precision and innovation allows us to deliver sustainable, reliable, and future-ready technologies that power industries worldwide.</p>
            </div>
        </div>
        <div class="page-blog-sidebar">
            <?php include './blog-sidebar.php' ?>
        </div>
    </div>


    <!-- --------------start of the footer section----------------- -->
    <?php include './footer.php' ?>

    <!-- -----------script link for the navbar and sidebar-------------- -->
    <script src="./navbar-sidebar.js"></script>
</body>
</html>