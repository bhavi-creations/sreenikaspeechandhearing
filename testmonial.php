<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pure Tone Audiometry - Hearing Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-blue: #2563eb;
            --secondary-teal: #14b8a6;
            --accent-purple: #8b5cf6;
            --dark-bg: #0f172a;
            --light-text: #e2e8f0;
            --card-bg: rgba(30, 41, 59, 0.8);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                radial-gradient(circle at 20% 50%, rgba(37, 99, 235, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(139, 92, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(20, 184, 166, 0.1) 0%, transparent 50%);
            pointer-events: none;
            z-index: 0;
        }

        .audiometry-section {
            padding: 80px 0;
            position: relative;
            z-index: 1;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
            animation: fadeInDown 1s ease-out;
        }

        .section-badge {
            display: inline-block;
            padding: 8px 24px;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-teal));
            color: white;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
        }

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, #60a5fa, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--light-text);
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
            line-height: 1.8;
        }

        .main-content-card {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(96, 165, 250, 0.2);
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            margin-bottom: 40px;
            animation: fadeInUp 1s ease-out 0.3s backwards;
            transition: all 0.4s ease;
        }

        .main-content-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 80px rgba(37, 99, 235, 0.3);
            border-color: var(--primary-blue);
        }

        .main-content-card h3 {
            color: var(--secondary-teal);
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .main-content-card h3 i {
            font-size: 2.2rem;
            color: var(--primary-blue);
        }

        .main-content-card p {
            color: var(--light-text);
            font-size: 1.1rem;
            line-height: 1.9;
            margin: 0;
        }

        .keywords-section {
            margin: 40px 0;
        }

        .keywords-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            margin-top: 30px;
        }

        .keyword-tag {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.15), rgba(139, 92, 246, 0.15));
            border: 2px solid rgba(96, 165, 250, 0.3);
            padding: 15px 20px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            animation: fadeIn 1s ease-out backwards;
        }

        .keyword-tag:nth-child(1) {
            animation-delay: 0.4s;
        }

        .keyword-tag:nth-child(2) {
            animation-delay: 0.5s;
        }

        .keyword-tag:nth-child(3) {
            animation-delay: 0.6s;
        }

        .keyword-tag:nth-child(4) {
            animation-delay: 0.7s;
        }

        .keyword-tag:nth-child(5) {
            animation-delay: 0.8s;
        }

        .keyword-tag:nth-child(6) {
            animation-delay: 0.9s;
        }

        .keyword-tag:hover {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.3), rgba(139, 92, 246, 0.3));
            border-color: var(--primary-blue);
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.4);
        }

        .keyword-tag i {
            font-size: 1.5rem;
            color: var(--secondary-teal);
            margin-bottom: 8px;
            display: block;
        }

        .keyword-tag span {
            color: var(--light-text);
            font-weight: 600;
            font-size: 0.95rem;
        }

        .comparison-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .comparison-card {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(96, 165, 250, 0.2);
            border-radius: 25px;
            padding: 40px;
            transition: all 0.4s ease;
            animation: fadeInUp 1s ease-out backwards;
            position: relative;
            overflow: hidden;
        }

        .comparison-card.advantages {
            animation-delay: 0.5s;
        }

        .comparison-card.disadvantages {
            animation-delay: 0.7s;
        }

        .comparison-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-blue), var(--secondary-teal));
        }

        .comparison-card.disadvantages::before {
            background: linear-gradient(90deg, #ef4444, #f97316);
        }

        .comparison-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(37, 99, 235, 0.3);
            border-color: var(--primary-blue);
        }

        .comparison-card h4 {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .comparison-card.advantages h4 {
            color: var(--secondary-teal);
        }

        .comparison-card.disadvantages h4 {
            color: #f87171;
        }

        .comparison-card h4 i {
            font-size: 2rem;
        }

        .comparison-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .comparison-list li {
            padding: 15px 0 15px 40px;
            position: relative;
            color: var(--light-text);
            font-size: 1rem;
            line-height: 1.7;
            border-bottom: 1px solid rgba(96, 165, 250, 0.1);
            transition: all 0.3s ease;
        }

        .comparison-list li:last-child {
            border-bottom: none;
        }

        .comparison-list li::before {
            content: '\f058';
            font-family: 'bootstrap-icons';
            position: absolute;
            left: 0;
            top: 15px;
            font-size: 1.3rem;
            color: var(--secondary-teal);
        }

        .comparison-card.disadvantages .comparison-list li::before {
            content: '\f1e2';
            color: #f87171;
        }

        .comparison-list li:hover {
            padding-left: 45px;
            color: white;
        }

        .conclusion-card {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.2), rgba(139, 92, 246, 0.2));
            backdrop-filter: blur(20px);
            border: 2px solid rgba(96, 165, 250, 0.3);
            border-radius: 25px;
            padding: 40px;
            text-align: center;
            margin-top: 40px;
            animation: fadeInUp 1s ease-out 0.9s backwards;
            position: relative;
            overflow: hidden;
        }

        .conclusion-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(96, 165, 250, 0.1) 0%, transparent 70%);
            animation: pulse 3s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.5;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.8;
            }
        }

        .conclusion-card h4 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--secondary-teal);
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .conclusion-card p {
            font-size: 1.2rem;
            color: var(--light-text);
            line-height: 1.9;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .decorative-icon {
            font-size: 4rem;
            color: var(--primary-blue);
            opacity: 0.2;
            position: absolute;
            animation: float 3s ease-in-out infinite;
        }

        .decorative-icon.top-right {
            top: 20px;
            right: 20px;
        }

        .decorative-icon.bottom-left {
            bottom: 20px;
            left: 20px;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .section-title {
                font-size: 2.5rem;
            }

            .main-content-card {
                padding: 35px;
            }

            .comparison-card {
                padding: 30px;
            }
        }

        @media (max-width: 768px) {
            .audiometry-section {
                padding: 60px 0;
            }

            .section-title {
                font-size: 2rem;
            }

            .section-subtitle {
                font-size: 1rem;
            }

            .main-content-card {
                padding: 30px 25px;
            }

            .main-content-card h3 {
                font-size: 1.5rem;
            }

            .main-content-card p {
                font-size: 1rem;
            }

            .keywords-grid {
                grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
                gap: 12px;
            }

            .keyword-tag {
                padding: 12px 15px;
            }

            .keyword-tag i {
                font-size: 1.3rem;
            }

            .keyword-tag span {
                font-size: 0.85rem;
            }

            .comparison-container {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .comparison-card {
                padding: 25px 20px;
            }

            .comparison-card h4 {
                font-size: 1.4rem;
            }

            .conclusion-card {
                padding: 30px 20px;
            }

            .conclusion-card h4 {
                font-size: 1.5rem;
            }

            .conclusion-card p {
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .section-title {
                font-size: 1.8rem;
            }

            .main-content-card {
                padding: 25px 20px;
                border-radius: 20px;
            }

            .keywords-grid {
                grid-template-columns: 1fr;
            }

            .comparison-list li {
                padding: 12px 0 12px 35px;
                font-size: 0.95rem;
            }

            .decorative-icon {
                font-size: 3rem;
            }
        }

        @media (max-width: 400px) {
            .section-badge {
                font-size: 12px;
                padding: 6px 18px;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .main-content-card h3 {
                font-size: 1.3rem;
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

    <!-- Pure Tone Audiometry Section -->
    <section class="audiometry-section">
        <div class="container">
            <div class="row">

                <div class="col-md-8">

                    <!-- Section Header -->
                    <div class="section-header">
                        <span class="section-badge">
                            <i class="bi bi-soundwave me-2"></i>Hearing Assessment
                        </span>
                        <h1 class="section-title">Pure Tone Audiometry</h1>
                        <p class="section-subtitle">
                            Advanced hearing assessment technology for early detection and precise diagnosis of hearing conditions
                        </p>
                    </div>

                    <!-- Main Content -->
                    <div class="main-content-card">
                        <i class="bi bi-headphones decorative-icon top-right"></i>
                        <h3>
                            <i class="bi bi-info-circle-fill"></i>
                            What is Pure Tone Audiometry?
                        </h3>
                        <p>
                            Pure Tone Audiometry (PTA) is a hearing test used to check how well a person can hear different sounds. Sounds of different pitches and volumes are played through headphones, and the patient responds when they hear the sound.
                        </p>
                    </div>

                    <!-- Keywords Section -->
                    <div class="keywords-section">
                        <div class="keywords-grid">
                            <div class="keyword-tag">
                                <i class="bi bi-ear-fill"></i>
                                <span>Hearing Test</span>
                            </div>
                            <div class="keyword-tag">
                                <i class="bi bi-activity"></i>
                                <span>Audiometer</span>
                            </div>
                            <div class="keyword-tag">
                                <i class="bi bi-broadcast"></i>
                                <span>Frequency (Hz)</span>
                            </div>
                            <div class="keyword-tag">
                                <i class="bi bi-volume-up-fill"></i>
                                <span>Decibel (dB)</span>
                            </div>
                            <div class="keyword-tag">
                                <i class="bi bi-earbuds"></i>
                                <span>Hearing Loss</span>
                            </div>
                            <div class="keyword-tag">
                                <i class="bi bi-graph-up"></i>
                                <span>Audiogram</span>
                            </div>
                        </div>
                    </div>

                    <!-- Advantages & Disadvantages -->
                    <div class="comparison-container">
                        <!-- Advantages Card -->
                        <div class="comparison-card advantages">
                            <i class="bi bi-lightbulb decorative-icon bottom-left"></i>
                            <h4>
                                <i class="bi bi-check-circle-fill"></i>
                                Advantages
                            </h4>
                            <ul class="comparison-list">
                                <li>Helps detect hearing loss early</li>
                                <li>Simple and painless test</li>
                                <li>Helps plan proper treatment (medicine, hearing aid, surgery)</li>
                                <li>Improves communication and quality of life</li>
                            </ul>
                        </div>

                        <!-- Disadvantages Card -->
                        <div class="comparison-card disadvantages">
                            <i class="bi bi-exclamation-triangle decorative-icon bottom-left"></i>
                            <h4>
                                <i class="bi bi-exclamation-circle-fill"></i>
                                Disadvantages
                            </h4>
                            <ul class="comparison-list">
                                <li>Not suitable for very young children</li>
                                <li>Results depend on patient cooperation</li>
                                <li>Sometimes additional tests are needed</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Conclusion -->
                    <div class="conclusion-card">
                        <h4>
                            <i class="bi bi-star-fill me-2"></i>
                            Conclusion
                        </h4>
                        <p>
                            Pure Tone Audiometry is a safe and effective test for identifying hearing problems at an early stage.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, observerOptions);

        document.addEventListener('DOMContentLoaded', () => {
            const animatedElements = document.querySelectorAll('.main-content-card, .keyword-tag, .comparison-card, .conclusion-card');
            animatedElements.forEach(el => observer.observe(el));
        });

        // Add interactive hover effects
        document.querySelectorAll('.keyword-tag, .comparison-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.05)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>

</body>

</html>