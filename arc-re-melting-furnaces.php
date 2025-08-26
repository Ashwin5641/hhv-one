<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arc Re-melting Furnaces | HHV Thermal Technologies</title>
    <link rel="icon" href="./assets/images/favicon.png" type="x-image/icon">

    <!-- --------------link for the styling service page--------------- -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./arc-re-melting-furnaces.css">
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
            <h2>Arc Re-melting Furnaces</h2>
            <div class="page-title-nav">
                <a href="./index.php">Home</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Products</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Arc Re-melting Furnaces</a>
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
                <h1>Vacuum Heat Furnaces</h1>
                <p>HHVTT specializes in premium, fully automatic vacuum heat treatment furnaces featuring multi-point soaking and gas quenching cycles. Designed for high consistency and low contamination, they’re ideal for annealing, hardening, tempering, ageing, and carburizing processes.</p>
                <p>Our systems are engineered for demanding industrial applications—ensuring clean, precise, and repeatable heat treatment outcomes. </p>
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
                        <p>Multi-point soaking ensures uniform temperature distribution.</p>
                    </li>
                    <li><span><i class="fa-solid fa-circle-check"></i></span>
                        <p>Gas quenching reduces oxidation and surface contamination.</p>
                    </li>
                    <li><span><i class="fa-solid fa-circle-check"></i></span>
                        <p>High repeatability with automated thermal profiling.</p>
                    </li>
                    <li><span><i class="fa-solid fa-circle-check"></i></span>
                        <p>Customizable cycles supporting annealing, ageing & carburizing.</p>
                    </li>
                </ul>
            </div>
            <div class="page-content-info-faq">
                <h1>Frequently Asked Questions</h1>
                <p>Explore answers to common technical inquiries about our furnaces and their industrial applications.</p>
                <div class="faq-section">
                    <div class="faq-item">
                        <button class="faq-question">What vacuum levels do the furnaces achieve?</button>
                        <div class="faq-answer">
                            <p>Our systems typically operate at **10⁻² to 10⁻³ mbar**, with optional upgrades available to reach **10⁻⁴ to 10⁻⁵ mbar**. :contentReference[oaicite:0]{index=0}</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">What heat treatment processes are supported?</button>
                        <div class="faq-answer">
                            <p>These furnaces support a variety of applications including annealing, hardening, ageing, tempering, and carburizing—providing a versatile solution for diverse industrial needs. :contentReference[oaicite:1]{index=1}</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Can workflows be automated?</button>
                        <div class="faq-answer">
                            <p>Yes—our systems are fully automated and support user-programmed heating cycles, multi-point soaking, and gas quenching for reliable, repeatable operation.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Are custom configurations available?</button>
                        <div class="faq-answer">
                            <p>Absolutely. HHVTT offers custom furnace designs tailored to specific industrial applications such as space, aerospace, defence, automotive, and metallurgy. :contentReference[oaicite:2]{index=2}</p>
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