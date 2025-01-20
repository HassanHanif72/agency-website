<?php
$page = basename($_SERVER['PHP_SELF'], '.php');
?>
<header class="header">
    <nav class="navbar navbar-expand-xl navbar-dark stroke bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end me-3" id="navbarNav">
                <ul class="navbar-nav">
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
            </div>
            <div class="my-2 my-lg-0 d-xl-block d-none">
                <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"
                    class="btn btn-theme-light">Order Now</a>
            </div>
        </div>
    </nav>
</header>

<!-- popup -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md model-sec">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="model-discount">
                            <div class="d-block text-center align-items-center">
                                <div class="animate-div"><span>Sign Up And Avail 50% Discount</span></div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <hr>
                            <form method="POST" action="signup" class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" class="form-control model-input" placeholder="Enter Name"
                                                pattern="[A-Za-z ]+" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control model-input"
                                                placeholder="Enter Email" name="email"
                                                pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Contact No.</label>
                                            <input type="number" class="form-control model-input"
                                                placeholder="Enter Contact No." name="phone"
                                                onkeypress="if(this.value.length==12) return false;" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Service</label>
                                            <select class="form-control form-select model-input" id="mySelect"
                                                required="" name="service">
                                                <option selected="" disabled="" value="">Select Service</option>
                                                <option value="Application Development">Application Development</option>
                                                <option value="Animation Services">Animation Services</option>
                                                <option value="Web Development">Web Development</option>
                                                <option value="Concept Art">Concept Art</option>
                                                <option value="Graphic Desig">Graphic Design</option>
                                                <option value="Digital Marketing">Digital Marketing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <button type="submit" class="btn btn-theme mt-1 w-100">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->