<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Vacuum Brazing Furnaces | HHV Thermal Technologies</title>
    <link rel="icon" href="./assets/images/favicon.png" type="x-image/icon">

    <!-- --------------link for the styling service page--------------- -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./vacuum-brazing-furnaces.css">
    <link rel="stylesheet" href="./services-sidebar.css">


    <!-- --------------link for the font awesome icons--------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=download" />

    <!-- ---------------link for the swiper js for the carousel---------------- -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


</head>

<body>

    <!-- --------------start of the topbar--------------- -->
    <?php include './topbar.php' ?>

    <!-- --------------start of the navber--------------- -->
    <?php include './navbar.php' ?>


    <!-- --------------start of the page title section--------------- -->

    <div class="page-title-section">
        <div class="page-title">
            <h4>PRODUCTS</h4>
            <h2>Vacuum Brazing Furnaces</h2>
            <div class="page-title-nav">
                <a href="./index.php">Home</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Products</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Vacuum Brazing Furnaces</a>
            </div>
        </div>
    </div>



    <!-- ---------------start of the page content section------------------ -->

    <div class="page-content-section">
        <div class="page-content-sidebar">
            <div class="sidebar-content-first-section">
                <?php include './services-sidebar.php' ?>
            </div>
        </div>
        <div class="page-content-info">
            <div class="page-content-info-hero-image">

            </div>
            <div class="page-content-info-title">
                <h1>Vacuum Brazing Furnaces</h1>
                <p>Our advanced vacuum brazing furnaces are engineered for precision, reliability, and high repeatability. They are ideal for joining complex and critical components where cleanliness and metallurgical integrity are essential.</p>
                <p>HHVTT furnaces are widely used in aerospace, defense, energy, automotive, and electronic industries. With uniform heating, leak-tight assemblies, and superior strength joints, our systems deliver unmatched performance for your brazing needs. </p>
            </div>
            <div class="page-content-info-images">
                <div class="page-content-info-image page-content-info-image1">

                </div>
                <div class="page-content-info-image page-content-info-image2">

                </div>
            </div>
            <div class="page-content-info-points">
                <ul>
                    <li><span><i class="fa-solid fa-circle-check"></i></span>
                        <p>High-strength, leak-proof joints for critical components</p>
                    </li>
                    <li><span><i class="fa-solid fa-circle-check"></i></span>
                        <p>Oxide-free, clean brazing environment ensuring superior metallurgical quality</p>
                    </li>
                    <li><span><i class="fa-solid fa-circle-check"></i></span>
                        <p>Uniform temperature control for consistent results</p>
                    </li>
                    <li><span><i class="fa-solid fa-circle-check"></i></span>
                        <p>Applicable across aerospace, defense, energy, automotive, and electronics</p>
                    </li>
                </ul>
            </div>
            <div class="page-content-info-faq">
                <h1>Frequently Asked Questions</h1>
                <p>Learn more about how vacuum brazing furnaces ensure reliability, strength, and repeatability in critical manufacturing processes.</p>
                <div class="faq-section">
                    <div class="faq-item">
                        <button class="faq-question">What is the advantage of vacuum brazing over conventional brazing?</button>
                        <div class="faq-answer">
                            <p>Vacuum brazing provides clean, strong, and oxide-free joints without the need for flux, ensuring superior metallurgical quality.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Which industries benefit most from vacuum brazing furnaces?</button>
                        <div class="faq-answer">
                            <p>They are widely used in aerospace, defense, energy, automotive, and electronics for producing high-performance components.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">What materials can be brazed in these furnaces?</button>
                        <div class="faq-answer">
                            <p>Materials such as stainless steel, superalloys, titanium, and copper can be brazed with high precision in vacuum furnaces.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Do you provide customization for specific applications?</button>
                        <div class="faq-answer">
                            <p>Yes, HHVTT offers customized vacuum brazing furnaces tailored to client-specific requirements and applications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- --------------start of the footer section----------------- -->
    <?php include './footer.php' ?>



    <!-- ---------------script for the Faq section---------------- -->
    <script>
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const currentItem = button.closest('.faq-item');
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== currentItem) {
                        item.classList.remove('active');
                    }
                });
                currentItem.classList.toggle('active');
            });
        });
    </script>


    <!-- -----------script link for the navbar and sidebar-------------- -->
    <script src="./navbar-sidebar.js"></script>
</body>

</html>