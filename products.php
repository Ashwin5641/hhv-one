<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Products | HHV Thermal Technologies</title>
    <link rel="icon" href="./assets/images/favicon.png" type="x-image/icon">

    <!-- --------------link for the styling service page--------------- -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./products.css">


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
            <h2>Products</h2>
            <div class="page-title-nav">
                <a href="./index.php">Home</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Products</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="./heat-treatment-furnaces.php">Heat Treatment Furnaces</a>
            </div>
        </div>
    </div>



    <!-- ---------------start of the page content section------------------ -->

    <div class="page-products-section">
        <div class="filters">
            <div class="filter-buttons">
                <button data-filter="all" class="active">All</button>
                <button data-filter="heat">Heat Treatment</button>
                <button data-filter="brazing">Brazing</button>
                <button data-filter="vacuum">Vacuum Systems</button>
            </div>

            <div class="filter-search">
                <input type="text" id="productSearch" placeholder="Search products...">
            </div>
        </div>
        <div class="page-product-cards">
            <div class="page-product-card" data-category="heat">
                <div class="page-product-card-img page-product-card-img1">

                </div>
                <div class="page-product-card-title">
                    <h3>Vacuum Heat Treatment Furnaces</h3>
                </div>
                <div class="page-product-card-button">
                    <a href="./heat-treatment-furnaces.php">Know More</a>
                </div>
            </div>
            <div class="page-product-card" data-category="brazing">
                <div class="page-product-card-img page-product-card-img2">

                </div>
                <div class="page-product-card-title">
                    <h3>Vacuum Brazing Furnaces</h3>
                </div>
                <div class="page-product-card-button">
                    <a href="./vacuum-brazing-furnaces.php">Know More</a>
                </div>
            </div>
            <div class="page-product-card" data-category="heat">
                <div class="page-product-card-img page-product-card-img3">

                </div>
                <div class="page-product-card-title">
                    <h3>Vacuum Hot Presses</h3>
                </div>
                <div class="page-product-card-button">
                    <a href="./vacuum-hot-presses.php">Know More</a>
                </div>
            </div>
            <div class="page-product-card" data-category="brazing">
                <div class="page-product-card-img page-product-card-img4">

                </div>
                <div class="page-product-card-title">
                    <h3>Vacuum Aluminium Brazing Furnaces</h3>
                </div>
                <div class="page-product-card-button">
                    <a href="./vacuum-aluminium-brazing-furnaces.php">Know More</a>
                </div>
            </div>
            <div class="page-product-card" data-category="vacuum">
                <div class="page-product-card-img page-product-card-img5">

                </div>
                <div class="page-product-card-title">
                    <h3>Vacuum Induction Melting and Casting Furnaces</h3>
                </div>
                <div class="page-product-card-button">
                    <a href="./induction-melting-and-casting-furnaces.php">Know More</a>
                </div>
            </div>
            <div class="page-product-card" data-category="vacuum">
                <div class="page-product-card-img page-product-card-img6">

                </div>
                <div class="page-product-card-title">
                    <h3>CVD,CVI and Graphitization Furnaces</h3>
                </div>
                <div class="page-product-card-button">
                    <a href="./cvd-cvi-and-graphitization-furnaces.php">Know More</a>
                </div>
            </div>
            <div class="page-product-card" data-category="vacuum">
                <div class="page-product-card-img page-product-card-img7">

                </div>
                <div class="page-product-card-title">
                    <h3>Vacuum Arc Re-melting Furnaces</h3>
                </div>
                <div class="page-product-card-button">
                    <a href="./arc-re-melting-furnaces.php">Know More</a>
                </div>
            </div>
            <div class="page-product-card" data-category="vacuum">
                <div class="page-product-card-img page-product-card-img8">

                </div>
                <div class="page-product-card-title">
                    <h3>Thermo Vacuum Systems</h3>
                </div>
                <div class="page-product-card-button">
                    <a href="./thermo-vacuum-furnaces.php">Know More</a>
                </div>
            </div>
            <div class="page-product-card" data-category="vacuum">
                <div class="page-product-card-img page-product-card-img9">

                </div>
                <div class="page-product-card-title">
                    <h3>Vacuum Ovens</h3>
                </div>
                <div class="page-product-card-button">
                    <a href="./vacuum-ovens.php">Know More</a>
                </div>
            </div>
        </div>
        <div id="noResultsMessage" class="no-results">No products match your search.</div>
    </div>





    <!-- --------------start of the footer section----------------- -->
    <?php include './footer.php' ?>


    <!-- -----------script for the filtering the products-------------- -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
        const filterButtons = document.querySelectorAll(".filter-buttons button");
        const cards = document.querySelectorAll(".page-product-card");
        const searchInput = document.getElementById("productSearch");
        const noResultsMessage = document.getElementById("noResultsMessage");

        filterButtons.forEach(button => {
            button.addEventListener("click", () => {
            filterButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");
            filterCards(button.getAttribute("data-filter"), searchInput.value.toLowerCase());
            });
        });

        searchInput.addEventListener("input", () => {
            const active = document.querySelector(".filter-buttons button.active");
            filterCards(active ? active.getAttribute("data-filter") : "all", searchInput.value.toLowerCase());
        });

        function filterCards(category, searchText) {
            let anyVisible = false;

            cards.forEach(card => {
            const title = card.textContent.toLowerCase();
            const matches =
                (category === "all" || card.dataset.category === category) &&
                title.includes(searchText);

            card.classList.toggle("hidden", !matches);
            if (matches) anyVisible = true;
            });

            noResultsMessage.style.display = anyVisible ? "none" : "block";
        }
        });
    </script>




    <!-- -----------script link for the navbar and sidebar-------------- -->
    <script src="./navbar-sidebar.js"></script>
</body>

</html>