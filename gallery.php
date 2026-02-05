<?php include 'header.php'; ?>
<section id="gallery" class="rjy-gallery-zone">
    <div class="container">


    
        <div class="section-header fade-in-up ">
            <span class="section-label">Our Gallery</span>
            <h2 class="section-title">Hearing Solutions & Anatomy</h2>
            <p class="section-description">Understand the complexity of human hearing and the advanced technology we use to restore it.</p>
        </div>

        <div class="rjy-gallery-grid">
            <div class="rjy-gallery-card fade-in-up" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="updateModal('gallery._7.jpg', 'Detailed Ear Anatomy')">
                <img src="gallery._7.jpg" alt="Ear Anatomy" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="fa-solid fa-ear-listen rjy-gallery-icon"></i>
                    <span class="rjy-gallery-label">Human Ear Anatomy</span>
                </div>
            </div>

            <div class="rjy-gallery-card fade-in-up delay-1" onclick="updateModal('gallery_2.jpg', 'Auditory Pathway')">
                <img src="gallery_2.jpg" alt="Auditory Pathway" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="fa-solid fa-brain rjy-gallery-icon"></i>
                    <span class="rjy-gallery-label">Auditory Pathway</span>
                </div>
            </div>

            <div class="rjy-gallery-card fade-in-up delay-2" onclick="updateModal('gallery_3.jpg', 'Cochlear Implant Setup')">
                <img src="gallery_3.jpg" alt="Cochlear Implant" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="fa-solid fa-microchip rjy-gallery-icon"></i>
                    <span class="rjy-gallery-label">Cochlear Technology</span>
                </div>
            </div>

            <div class="rjy-gallery-card fade-in-up delay-3" onclick="updateModal('gallery_5.jpg', 'Styles of Hearing Aids')">
                <img src="gallery_5.jpg" alt="Hearing Aid Styles" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="fa-solid fa-layer-group rjy-gallery-icon"></i>
                    <span class="rjy-gallery-label">Hearing Aid Styles</span>
                </div>
            </div>

            <div class="rjy-gallery-card fade-in-up delay-4" onclick="updateModal('gallery_1.jpg', 'Premium Hearing Aids')">
                <img src="gallery_1.jpg" alt="Premium Aids" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="fa-solid fa-star rjy-gallery-icon"></i>
                    <span class="rjy-gallery-label">Premium Solutions</span>
                </div>
            </div>

            <div class="rjy-gallery-card fade-in-up delay-5" onclick="updateModal('gallery_8.jpg', 'Advanced Device Lineup')">
                <img src="gallery_8.jpg" alt="Device Lineup" class="rjy-gallery-photo">
                <div class="rjy-gallery-overlay">
                    <i class="fa-solid fa-kit-medical rjy-gallery-icon"></i>
                    <span class="rjy-gallery-label">Product Lineup</span>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>