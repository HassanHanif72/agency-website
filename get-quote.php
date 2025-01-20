<section class="contact-us">
    <div class="container">
        <div class="contact-bg" data-aos="zoom-in">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="contact-left">
                        <img src="assets/images/contact-icon.png">
                        <h3 class="mt-3">Get In Touch With Our Team</h3>
                        <div class="d-flex align-items-start mb-2 gap-3">
                            <img src="assets/images/email-icon.png" class="img-fluid" alt="">
                            <div class="mb-0">
                                <h5>Send us a message</h5>
                                <p><a href="mailto:info@example.co.uk">info@example.co.uk</a>
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4 gap-3">
                            <img src="assets/images/phone-icon.png" class="img-fluid" alt="">
                            <div class="mb-0">
                                <h5>Setup a call</h5>
                                <p><a href="tel:+1234567890"> +1234567890</a></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <form method="POST" action="signup" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label>Name*</label>
                                    <input type="text" class="form-control" name="name" pattern="[A-Za-z ]+"
                                        placeholder="Enter Name*" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label>Email*</label>
                                    <input type="email" class="form-control" name="email"
                                        pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" placeholder="Enter Email*"
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label>Phone*</label>
                                    <input type="number" class="form-control" name="phone"
                                        onkeypress="if(this.value.length==12) return false;"
                                        placeholder="Enter Phone No.*" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label>Service*</label>
                                    <select class="form-control form-select" required="" name="service">
                                        <option selected="" disabled="" value="">Select Service*</option>
                                        <option value="Application Development">Application Development</option>
                                        <option value="Animation Services">Animation Services</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Concept Art">Concept Art</option>
                                        <option value="Graphic Desig">Graphic Design</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message"
                                        onkeypress="if(this.value.length==250) return false;" name="message" rows="4"
                                        cols="50" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-theme">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>