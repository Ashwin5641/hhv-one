<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | HHV Thermal Technologies</title>
    <link rel="icon" href="./assets/images/favicon.png" type="x-image/icon">

    <!-- --------------link for the styling index page--------------- -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./contact-us.css">

    <!-- --------------link for the font awesome icons--------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
</head>
<body>

    <!-- --------------start of the topbar--------------- -->
    <?php include './topbar.php' ?>

    <!-- --------------start of the navber--------------- -->
    <?php include './navbar.php' ?>


    <!-- --------------start of the page contact us title section--------------- -->
    <div class="page-title-section">
        <div class="page-title">
            <h2>Contact Us</h2>
            <div class="page-title-nav">
                <a href="./index.php">Home</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Services</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Contact Us</a>
            </div>
        </div>
    </div>

    
    

    <!-- ---------------start of the page contact form section ------------------ -->
    <div class="page-contact-form-section">
        <div class="contactImage-and-contactForm">
            <div class="contact-form-image">
                <div class="contact-form-img">
                    <div class="open-timings">
                        <div class="open-timings-icon">
                            <span><i class="fa-solid fa-calendar-days"></i></span>
                        </div>
                        <div class="open-timings-info">
                            <h3>Opening days:</h3>
                            <p>Mon-Sat: 9:00am to 5:30pm</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form-image-circle">
                    <a href="#">Request a Consultation</a>
                </div>
            </div>
            <div class="contact-form-form">
                <div class="form">
                    <div class="form-title">
                        <h4>Get in touch </h4>
                        <h2>Start Your Industrial Solutions Journey Today!</h2>
                        <p>Reach out to our experts for precision vacuum furnace solutions tailored to aerospace, defence, automotive, and metallurgical industries.</p>
                    </div>
                    <div class="form-icons">
                        <div class="form-icon">
                            <div class="icon">
                                <h2><i class="fa-solid fa-phone-volume"></i></h2>
                            </div>
                            <div class="icon-info">
                                <h4>Call Now</h4>
                                <p>+91-80-41931000</p>
                            </div>
                        </div>
                        <div class="form-icon">
                            <div class="icon">
                                <h2><i class="fa-solid fa-envelope-circle-check"></i></h2>
                            </div>
                            <div class="icon-info">
                                <h4>Send Your Message</h4>
                                <p>info@hhvthermaltech</p>
                            </div>
                        </div>
                        <div class="form-icon">
                            <div class="icon">
                                <h2><i class="fa-solid fa-location-dot"></i></h2>
                            </div>
                            <div class="icon-info">
                                <h4>Visit The Clinic</h4>
                                <p>No. 17, Phase 1, Peenya, Bengaluru</p>
                            </div>
                        </div>
                    </div>
                    <form class="form-inputs" id="contactForm">
                        <div class="input-name-and-email">
                            <input type="text" placeholder="Name" name="name">
                            <input type="email" placeholder="Email" name="email">
                        </div>
                        <div class="input-phone-and-subject">
                            <input type="phone" placeholder="Phone" name="phone">
                            <input type="text" placeholder="Subject" name="subject">
                        </div>
                        <div class="input-textarea-message">
                            <textarea name="message" id="" placeholder="Message"></textarea>
                        </div>
                        <div class="input-submit-button">
                            <a href="#" id="submitBtn">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- --------------start of the page contact us google map------------------ -->
    
    <div class="page-contactus-map-section">
        <div class="page-contactus-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d124381.42721754703!2d77.44612784480877!3d13.040789474356044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae3d98b7863ab1%3A0xa489fdebc7d1e954!2sSite%20No.%2017%2C%20Phase%2C%201%2C%20Phase%20-1%2C%20Peenya%2C%20Bengaluru%2C%20Karnataka%20560022!3m2!1d13.0408215!2d77.5284956!5e0!3m2!1sen!2sin!4v1756169071393!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>






    <!-- --------------start of the footer section----------------- -->
    <?php include './footer.php' ?> 


    <!-- --------------script for calling the submit form php-------------- -->
    <script>
        document.getElementById("submitBtn").onclick = function(e) {
            e.preventDefault();

            var form = document.getElementById("contactForm");
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "submit_form.php", true);
            xhr.onload = function() {
                alert(xhr.responseText);
                if (xhr.status == 200) {
                    form.reset();
                }
            };
            xhr.send(formData);
        };
    </script>

    <!-- -----------script link for the navbar and sidebar-------------- -->
    <script src="./navbar-sidebar.js"></script>
</body>
</html>