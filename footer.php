<!-- ==================== FOOTER SECTION ==================== -->
<footer class="rjy-footer-base">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="rjy-footer-widget">
                    <h4>Sreenika speech and hearing</h4>
                    <p class="rjy-footer-desc">
                        <!-- With over 62+ years of experience, we are a trusted name in the steel industry, providing
                        high-quality steel products for residential, commercial, and industrial projects. -->
                    </p>
                    <div class="rjy-social-cluster">
                        <a href="#" class="rjy-social-link"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="rjy-social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="rjy-social-link"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="rjy-social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="rjy-social-link"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-6 mb-4">
                <div class="rjy-footer-widget">
                    <h4>Quick Links</h4>
                    <ul class="rjy-footer-links">
                        <li><a href="#"><i class="bi bi-chevron-right"></i> Home</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i> About Us</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i> Products</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i> Services</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i> Gallery</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-6 mb-4">
                <div class="rjy-footer-widget">
                    <h4>Our Products</h4>
                    <ul class="rjy-footer-links">
                        <li><a href="service.php#hearing_service"><i class="bi bi-chevron-right"></i>Audiology  Services</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i> Speech Services</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i> Hearing Aids</a></li>
                        <!-- <li><a href="#"><i class="bi bi-chevron-right"></i> Steel Sheets</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i> Binding Wire</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i> Angles & Beams</a></li> -->
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="rjy-footer-widget">
                    <h4>Details</h4>
                    <p class="rjy-footer-desc">
                        XRW2+HV9, Aditya Nagar<br>Rajamahendravaram, AP 533107
                    </p>
                    <div class="mb-3">
                        <div class="rjy-contact-data">
                            <h5>Phone Number</h5>
                            <p>+91 96522 39999</p>
                        </div>
                    </div>
                    <!-- <div class="rjy-submit-btn" style="padding: 12px 30px;">

                    </div> -->
                </div>
            </div>
        </div>

        <div class="rjy-footer-bottom">
            <p class="rjy-copyright-text">
                &copy; 2026 <a href="#">Sreenika speech and hearing</a>. All Rights Reserved.
               
            </p>
        </div>
    </div>
</footer>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- count script -->
<script>
    const counters = document.querySelectorAll('.stat-number');

    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        let count = 0;
        const speed = 200; // smaller = faster

        const updateCount = () => {
            const increment = target / speed;

            if (count < target) {
                count += increment;
                counter.innerText = Math.ceil(count);
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
</script>





<!-- 3 image slide script -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        slidesPerGroup: 1,
        loop: true,
        grabCursor: true,

        speed: 600, // 👈 movement speed (ms) – 300 fast, 600 smooth

        autoplay: {
            delay: 2000, // next slide start delay
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1
            },
            576: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            }
        }
    });
</script>




<!-- image slider  -->
<script>
    const track = document.querySelector('.slider-track');
    const slides = document.querySelectorAll('.slide');
    let index = 0;

    function getVisibleSlides() {
        if (window.innerWidth < 576) return 1;
        if (window.innerWidth < 992) return 2;
        return 3;
    }

    function autoSlide() {
        let visible = getVisibleSlides();
        index++;

        if (index > slides.length - visible) {
            index = 0;
        }

        track.style.transform = `translateX(-${index * (100 / visible)}%)`;
    }

    setInterval(autoSlide, 2500);

    // Reset position on resize
    window.addEventListener('resize', () => {
        index = 0;
        track.style.transform = `translateX(0%)`;
    });
</script>

</body>

</html>