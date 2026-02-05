
<?php include 'header.php'; ?>
    <!-- <div class="container mt-5 text-center text-white">
        <h1 style="color: var(--sreenika-accent);">Sreenika Speech & Hearing</h1>
        <p>Experience the new animated mobile menu. Resize your browser to test!</p>
    </div> -->

    <!-- slider  -->
    <div id="sreenikaSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#sreenikaSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#sreenikaSlider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#sreenikaSlider" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner shadow-lg slider-container">

            <div class="carousel-item active" data-bs-interval="3000">
                <div class="img-wrapper">
                    <img src="./assets/img/01.jpg" class="slider-img img-fluid" alt="Speech Therapy">
                </div>
                <!-- <div class="carousel-caption">
                    <h2 class="fw-bold">Speech Therapy</h2>
                    <p>Expert care for your child.</p>
                </div> -->
            </div>

            <div class="carousel-item" data-bs-interval="3000">
                <div class="img-wrapper">
                    <img src="./assets/img/02.jpg" class="slider-img img-fluid" alt="Hearing Assessment">
                </div>
                <!-- <div class="carousel-caption">
                    <h2 class="fw-bold">Hearing Solutions</h2>
                    <p>Advanced diagnostic tests.</p>
                </div> -->
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#sreenikaSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#sreenikaSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>





    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Column - Stats -->
                <div class="col-lg-2 col-md-12 order-lg-1 order-2">
                    <div class="stats-column">
                        <div class="stat-item fade-in-up">
                            <div class="stat-number" data-target="10000">0+</div>
                            <div class="stat-label">Happy Patients</div>
                        </div>

                        <div class="stat-item fade-in-up">
                            <div class="stat-number" data-target="4">0+</div>
                            <div class="stat-label">Experts Doctors</div>
                        </div>

                        <div class="stat-item fade-in-up">
                            <div class="stat-number" data-target="13">0</div>
                            <div class="stat-label">Years of Experience</div>
                        </div>
                    </div>

                </div>

                <!-- Middle Column - Image -->
                <div class="col-lg-5 col-md-12 order-lg-2 order-1">
                    <div class="image-column">
                        <div class="image-wrapper">
                            <!-- Circular Badge -->
                            <div class="circular-badge">
                                <svg class="circular-text" viewBox="0 0 120 120">
                                    <path id="circlePath" d="M 60, 60 m -50, 0 a 50,50 0 1,1 100,0 a 50,50 0 1,1 -100,0"
                                        fill="none" />
                                    <text>
                                        <textPath href="#circlePath" startOffset="0%">
                                            <!-- ABOUT US • ABOUT US • ABOUT US • -->
                                            Sreenika speech and hearing
                                        </textPath>
                                    </text>
                                </svg>
                            </div>

                            <!-- Main Image -->
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=800&h=1000&fit=crop"
                                alt="Professional Woman Working" class="main-image">
                        </div>
                    </div>
                </div>

                <!-- Right Column - Content -->
                <div class="col-lg-5 col-md-12 order-lg-3 order-3">
                    <div class="content-column">
                        <div class="section-tag">ABOUT US</div>
                        <!-- <span class="section-label fade-in-up delay-2">About Us</span> -->

                        <h2 class="section-title">
                            Advanced solutions for hearing restoration.
                        </h2>

                        <p class="section-description">
                            At Sreenika, our mission is to empower individuals through the gift of voice and hearing. We
                            provide a comprehensive therapeutic ecosystem tailored for all age groups, with a
                            specialized focus on pediatric developmental support. Our expertise spans across managing
                            speech delays, attention deficits, and behavioral challenges through scientifically-backed
                            intervention and personalized rehabilitation.
                        </p>

                        <a href="about.php" class="read-more-btn">
                            Read More
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- service section  -->







    <section id="services" class="py-5 bg-white overflow-hidden">
        <div class="container py-lg-5 text-center">

            <div class="mb-5 reveal">
                <div class="section-tag">Our Services</div>
                <!-- <h6 class="text-uppercase fw-bold" style="color: #00d9ff; letter-spacing: 2px;">Our Services</h6> -->
                <h2 class="display-5 fw-bold" style="color: #002244;">Specialized Care Solutions</h2>
                <div class="mx-auto mt-3" style="width: 60px; height: 4px; background: #00d9ff; border-radius: 2px;">
                </div>
            </div>

            <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner p-4">

                    <div class="carousel-item active">
                        <div class="row g-4">
                            <div class="col-md-4 reveal fade-bottom">
                                <div class="service-card shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=500"
                                        alt="Speech Therapy">
                                    <div class="p-4">
                                        <h4 class="fw-bold">Speech Therapy</h4>
                                        <p class="text-muted">Personalized care for stammering and articulation issues.
                                        </p>
                                        <a href="#" class="btn-link">Read More &raquo;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 reveal fade-bottom">
                                <div class="service-card shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?q=80&w=500"
                                        alt="Hearing Test">
                                    <div class="p-4">
                                        <h4 class="fw-bold">Hearing Assessment</h4>
                                        <p class="text-muted">Expert audiometry and hearing aid trials for all ages.</p>
                                        <a href="#" class="btn-link">Read More &raquo;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 reveal fade-bottom">
                                <div class="service-card shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1590233142712-42674e2df401?q=80&w=500"
                                        alt="Autism Support">
                                    <div class="p-4">
                                        <h4 class="fw-bold">Autism Support</h4>
                                        <p class="text-muted">Comprehensive behavioral and occupational therapy.</p>
                                        <a href="#" class="btn-link">Read More &raquo;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="service-card shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?q=80&w=500"
                                        alt="Cochlear Implant">
                                    <div class="p-4">
                                        <h4 class="fw-bold">Cochlear Implant</h4>
                                        <p class="text-muted">Advanced surgical and rehabilitative hearing solutions.
                                        </p>
                                        <a href="#" class="btn-link">Read More &raquo;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1581056770664-07d06509f692?q=80&w=500"
                                        alt="Behavioral Therapy">
                                    <div class="p-4">
                                        <h4 class="fw-bold">Behavioral Therapy</h4>
                                        <p class="text-muted">Support for attention deficit and cognitive development.
                                        </p>
                                        <a href="#" class="btn-link">Read More &raquo;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card shadow-sm">
                                    <img src="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?q=80&w=500"
                                        alt="Voice Disorders">
                                    <div class="p-4">
                                        <h4 class="fw-bold">Voice Disorders</h4>
                                        <p class="text-muted">Professional therapy for voice strain and disorders.</p>
                                        <a href="#" class="btn-link">Read More &raquo;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev custom-ctrl" type="button" data-bs-target="#serviceCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle"></span>
                </button>
                <button class="carousel-control-next custom-ctrl" type="button" data-bs-target="#serviceCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
                </button>
            </div>
        </div>
    </section>


    <!-- portfolio -->
    <section class="rjy-gallery-zone" id="gallery">
        <div class="container">

            <div class="mb-5 reveal text-center">
                <div class="section-tag">Gallery</div>

                <!-- <h2 class="display-5 fw-bold" style="color: #002244;">
                    What Our Clients Say
                </h2> -->

                <!-- <div class="mx-auto mt-3" style="width: 60px; height: 4px; background: #00d9ff; border-radius: 2px;">
                </div> -->
            </div>




            <!-- <div class="section-tag d-flex justify-content-between">Gallery</div> -->
            <!-- <div class="rjy-slider-header">
                <span class="rjy-slider-badge">Portfolio</span>
                <h2 class="rjy-slider-title">Our Steel Works Gallery</h2>
                <p class="rjy-slider-desc">Explore our diverse range of completed projects</p>
            </div> -->

            <div class="rjy-gallery-grid">
                <div class="rjy-gallery-card">
                    <img src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?w=800&h=600&fit=crop"
                        alt="Gallery 1" class="rjy-gallery-photo">
                    <div class="rjy-gallery-overlay">
                        <i class="bi bi-building rjy-gallery-icon"></i>
                        <span class="rjy-gallery-label">High-Rise Buildings</span>
                    </div>
                </div>

                <div class="rjy-gallery-card">
                    <img src="https://images.unsplash.com/photo-1513735492246-483525079686?w=400&h=300&fit=crop"
                        alt="Gallery 2" class="rjy-gallery-photo">
                    <div class="rjy-gallery-overlay">
                        <i class="bi bi-hammer rjy-gallery-icon"></i>
                        <span class="rjy-gallery-label">Industrial Works</span>
                    </div>
                </div>

                <div class="rjy-gallery-card">
                    <img src="https://images.unsplash.com/photo-1581092583537-20d51876f3c3?w=400&h=300&fit=crop"
                        alt="Gallery 3" class="rjy-gallery-photo">
                    <div class="rjy-gallery-overlay">
                        <i class="bi bi-tools rjy-gallery-icon"></i>
                        <span class="rjy-gallery-label">Fabrication</span>
                    </div>
                </div>



                <div class="rjy-gallery-card">
                    <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=800&h=400&fit=crop"
                        alt="Gallery 4" class="rjy-gallery-photo">
                    <div class="rjy-gallery-overlay">
                        <i class="bi bi-house-fill rjy-gallery-icon"></i>
                        <span class="rjy-gallery-label">Residential Projects</span>
                    </div>
                </div>

                <div class="rjy-gallery-card">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&h=300&fit=crop"
                        alt="Gallery 5" class="rjy-gallery-photo">
                    <div class="rjy-gallery-overlay">
                        <i class="bi bi-briefcase-fill rjy-gallery-icon"></i>
                        <span class="rjy-gallery-label">Corporate Buildings</span>
                    </div>
                </div>

                <div class="rjy-gallery-card">
                    <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=400&h=300&fit=crop"
                        alt="Gallery 6" class="rjy-gallery-photo">
                    <div class="rjy-gallery-overlay">
                        <i class="bi bi-shop rjy-gallery-icon"></i>
                        <span class="rjy-gallery-label">Commercial Spaces</span>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- ==================== TESTIMONIALS SECTION ==================== -->
    <section class="rjy-testimonial-arena" id="testimonials">
        <div class="container">


            <div class="mb-5 reveal text-center">
                <div class="section-tag">Testimonials</div>
                <h2 class="display-5 fw-bold" style="color: #002244;">What Our Clients Say</h2>

                <!-- <h2 class="display-5 fw-bold" style="color: #002244;">
                    What Our Clients Say
                </h2> -->

                <!-- <div class="mx-auto mt-3" style="width: 60px; height: 4px; background: #00d9ff; border-radius: 2px;">
                </div> -->
            </div>


   
            <!-- <div class="rjy-slider-header">
                <span class="rjy-slider-badge">Testimonials</span>
                <h2 class="rjy-slider-title">What Our Clients Say</h2>
                <p class="rjy-slider-desc"></p>
            </div> -->

            <div class="rjy-testimonial-container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rjy-testimonial-box">
                            <div class="rjy-testimonial-quote">"</div>
                            <div class="rjy-testimonial-content">
                                <div class="rjy-testimonial-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="rjy-testimonial-text">
                                    With years of dedicated experience, Sreenika Speech and Hearing is a trusted center,
                                    offering comprehensive speech, hearing, and language therapy services for children
                                    and adults.
                                </p>
                                <div class="rjy-testimonial-author">
                                    <img src="https://i.pravatar.cc/150?img=33" alt="Client 1"
                                        class="rjy-testimonial-avatar">
                                    <div class="rjy-testimonial-info">
                                        <h5>Rajesh Kumar</h5>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rjy-testimonial-box">
                            <div class="rjy-testimonial-quote">"</div>
                            <div class="rjy-testimonial-content">
                                <div class="rjy-testimonial-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="rjy-testimonial-text">
                                    Sreenika Speech and Hearing provides excellent care with a very professional and
                                    friendly approach. The therapists are patient, knowledgeable, and truly dedicated to
                                    improving communication skills in children and adults.
                                </p>
                                <div class="rjy-testimonial-author">
                                    <img src="https://i.pravatar.cc/150?img=47" alt="Client 2"
                                        class="rjy-testimonial-avatar">
                                    <div class="rjy-testimonial-info">
                                        <h5>Priya Sharma</h5>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="rjy-testimonial-box">
                            <div class="rjy-testimonial-quote">"</div>
                            <div class="rjy-testimonial-content">
                                <div class="rjy-testimonial-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="rjy-testimonial-text">
                                    We had a very positive experience at Sreenika Speech and Hearing. The therapy
                                    sessions are well-planned, supportive, and effective. Highly recommended for anyone
                                    looking for quality speech and hearing services.
                                </p>
                                <div class="rjy-testimonial-author">
                                    <img src="https://i.pravatar.cc/150?img=12" alt="Client 3"
                                        class="rjy-testimonial-avatar">
                                    <div class="rjy-testimonial-info">
                                        <h5>Anil Reddy</h5>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CONTACT SECTION ==================== -->
    <section class="rjy-contact-realm" id="contact">
        <div class="container">


         <div class="mb-5 reveal text-center">
                <div class="section-tag">Get in Touch</div>
                <h2 class="display-5 fw-bold" style="color: #002244;">Contact Us Today</h2>
                <p class="rjy-slider-desc">Let's discuss your steel requirements</p>

                <!-- <h2 class="display-5 fw-bold" style="color: #002244;">
                    What Our Clients Say
                </h2> -->

                <!-- <div class="mx-auto mt-3" style="width: 60px; height: 4px; background: #00d9ff; border-radius: 2px;">
                </div> -->
            </div>

            <!-- <div class="rjy-slider-header">
                <span class="rjy-slider-badge">Get in Touch</span>
                <h2 class="rjy-slider-title">Contact Us Today</h2>
                <p class="rjy-slider-desc">Let's discuss your steel requirements</p>
            </div> -->

            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="rjy-contact-panel">
                        <h3
                            style="color: var(--steel-primary); margin-bottom: 30px; font-size: 1.8rem; font-weight: 700;">
                            Contact Information
                        </h3>

                        <div class="rjy-contact-info-block">
                            <div class="rjy-contact-icon-circle">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="rjy-contact-data">
                                <h5>Our Location</h5>
                                <p>XRW2+HV9, Aditya Nagar<br>Rajamahendravaram, AP 533107</p>
                            </div>
                        </div>

                        <div class="rjy-contact-info-block">
                            <div class="rjy-contact-icon-circle">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="rjy-contact-data">
                                <h5>Phone Number</h5>
                                <p>+91 96522 39999</p>
                            </div>
                        </div>

                        <div class="rjy-contact-info-block">
                            <div class="rjy-contact-icon-circle">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="rjy-contact-data">
                                <h5>Email Address</h5>
                                <p>srinika@gmail.com</p>
                            </div>
                        </div>

                        <div class="rjy-contact-info-block">
                            <div class="rjy-contact-icon-circle">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div class="rjy-contact-data">
                                <h5>Business Hours</h5>
                                <p>Mon - Sat: 9:00 AM - 8:00 PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="rjy-contact-panel">
                        <h3
                            style="color: var(--steel-primary); margin-bottom: 30px; font-size: 1.8rem; font-weight: 700;">
                            Send Us a Message
                        </h3>

                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input type="text" class="rjy-form-input" placeholder="Your Name *" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="email" class="rjy-form-input" placeholder="Your Email *" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <input type="tel" class="rjy-form-input" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <select class="rjy-form-select">
                                        <option selected>Select Service</option>
                                        <option value="1">TMT Steel Bars</option>
                                        <option value="2">Structural Steel</option>
                                        <option value="3">MS Products</option>
                                        <option value="4">Steel Sheets & Plates</option>
                                        <option value="5">Binding Wire</option>
                                        <option value="6">Angles & Beams</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <input type="text" class="rjy-form-input" placeholder="Subject">
                            </div>

                            <div class="mb-4">
                                <textarea class="rjy-form-textarea" rows="6" placeholder="Your Message *"
                                    required></textarea>
                            </div>

                            <button type="submit" class="rjy-submit-btn">
                                <span>
                                    <i class="bi bi-send-fill"></i> Send Message
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php' ;?>