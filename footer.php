<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row pb-4">
            <div class="col-xl-5 col-lg-4 col-md-12">
                <div class="footer-logo">
                    <a href="#"><img src="assets/images/logo.png"></a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sit ut aliquam. Rerum minima
                        deleniti consequuntur. Mollitia quidem, laudantium error fugiat totam voluptatum deserunt
                        similique illo officiis aperiam doloremque nihil?.</p>
                    <div class="social">
                        <p class="mb-0">
                            <a target="_blank" aria-label="Facebook" href="#"><i
                                    class="fa fa-facebook-official"></i></a>
                            <a target="_blank" aria-label="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a>
                            <!--<a target="_blank" aria-label="Instagram" href="#"><i class="fa fa-instagram"></i></a>-->
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                <div class="footer-links ">
                    <h6>Our Service</h6>
                    <ul class="list-unstyled">
                        <li><a href="app-development">Application Development</a></li>
                        <li><a href="animation-services">Animation Services</a></li>
                        <li><a href="web-development">Web Development</a></li>
                        <li><a href="concept-art">Concept Art</a></li>
                        <li><a href="graphic-design">Graphic Design</a></li>
                        <li><a href="digital-marketing">Digital Marketing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-6">
                <div class="footer-links ">
                    <h6>Contact Us</h6>
                    <ul class="list-unstyled">
                        <li><a class="d-flex align-items-center justify-content-lg-start justify-content-center"
                                href="tel:+1234567890"><img src="assets/images/phone.webp" alt=""> +1234567890</a></li>
                        <li><a class="d-flex align-items-center justify-content-lg-start justify-content-center"
                                href="mailto:info@example.com"><img src="assets/images/email.webp" alt="">
                                info@example.com</a></li>
                        <li><a class="d-flex align-items-center justify-content-lg-start justify-content-center"
                                href="#"><img src="assets/images/location.webp" alt=""> 2231 Johnstown Road Bensenville,
                                IL 60106</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="footer-links">
                    <h6>Subscribe Us</h6>
                    <p>Stay updated with our latest news. We promise not to spam!</p>
                    <form method="POST" action="signup">
                        <div class="input-group mt-3 mb-3">
                            <input type="text" class="form-control" placeholder="Your Email" aria-label="Your Email"
                                aria-describedby="Your Email" name="email"
                                pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required="">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="row align-items-center mt-0 pt-2 pb-2">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="footer-bootom-links">
                    <span>Copyright © 2023 - 2024 . Website Name . All rights reserved.</span>

                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-12">
                <div class="social-link text-lg-end">
                    <p class="mb-0">
                        <a href="#">Terms &amp; Conditions</a>
                        <a href="#">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end -->

<!-- Website JS -->
<script src="assets/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Slick Carousel JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- gsap -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

<script>

</script>
<!-- <script src="https://unpkg.com/split-type"></script> -->
<!-- Custom JS -->
<script src="assets/js/main.js"></script>
<!-- AOS JS -->
<script src="assets/js/aos.js"></script>
<script>
AOS.init({
    duration: 1000
});
</script>

<!-- Offcanvas Side Bar -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <a href="#"><img src="assets/images/logo.png" alt="logo"></a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'index') { echo 'active'; } ?>" href="index">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'about-us') { echo 'active'; } ?>" href="about-us">About
                    Us</a>
            </li>
            <li class="nav-item dropdown navdesktop">
                <a class="nav-link <?php if ($page == '#') { echo 'active'; } ?>" href="#">
                    Services <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-navdesktop" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="app-development">Application Development</a></li>
                    <li><a class="dropdown-item" href="animation-services">Animation Services</a></li>
                    <li><a class="dropdown-item" href="web-development">Web Development</a></li>
                    <li><a class="dropdown-item" href="concept-art">Concept Art</a></li>
                    <li><a class="dropdown-item" href="graphic-design">Graphic Design</a></li>
                    <li><a class="dropdown-item" href="digital-marketing">Digital Marketing</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'blog') { echo 'active'; } ?>" href="blog">
                    Blog
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'portfolio') { echo 'active'; } ?>" href="portfolio">
                    Portfolio
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'contact-us') { echo 'active'; } ?>" href="contact-us">
                    Contact Us
                </a>
            </li>
        </ul>
        <div class="mt-3">
            <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"
                class="btn btn-theme-light">Contact Us</a>
        </div>
    </div>
</div>
<!-- end -->